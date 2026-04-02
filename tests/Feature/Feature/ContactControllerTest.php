<?php

namespace Tests\Feature\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactControllerTest extends TestCase
{
    use RefreshDatabase; // Ricarica database per ogni test

    /**
     * Test che il form contatti valida correttamente i dati
     */
    public function test_form_validates_input_correctly(): void
    {
        // Test con dati vuoti - dovrebbe fallire
        $response = $this->post('/contatti', [
            'name' => '',
            'email' => 'invalid-email',
            'message' => 'short',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
    }

    /**
     * Test che il messaggio di contatto viene salvato nel database
     */
    public function test_contact_message_is_stored_in_database(): void
    {
        // Test con dati validi
        $contactData = [
            'name' => 'Mario Rossi',
            'email' => 'mario@example.com',
            'message' => 'Questo è un messaggio di test per verificare il funzionamento del form contatti.',
        ];

        $response = $this->post('/contatti', $contactData);

        // Verifica che il messaggio sia stato salvato
        $this->assertDatabaseHas('contact_messages', [
            'email' => 'mario@example.com',
            'name' => 'Mario Rossi',
        ]);

        // Verifica redirect alla pagina di ringraziamento
        $response->assertRedirect('/contatti/grazie');
    }

    /**
     * Test che il campo honeypot blocca lo spam
     */
    public function test_honeypot_field_blocks_spam(): void
    {
        // Test con campo honeypot riempito (spam)
        $response = $this->post('/contatti', [
            'name' => 'Spam Bot',
            'email' => 'spam@example.com',
            'message' => 'Messaggio spam',
            'honeypot' => 'spam-content', // Campo nascosto riempito = spam
        ]);

        // Verifica che il messaggio NON sia stato salvato
        $this->assertDatabaseMissing('contact_messages', [
            'email' => 'spam@example.com',
        ]);
    }

    /**
     * Test che la pagina contatti è accessibile
     */
    public function test_contact_page_is_accessible(): void
    {
        $response = $this->get('/contatti');

        $response->assertStatus(200)
                ->assertViewIs('pages.contact');
    }

    /**
     * Test che la pagina di ringraziamento è accessibile
     */
    public function test_thanks_page_is_accessible(): void
    {
        $response = $this->get('/contatti/grazie');

        $response->assertStatus(200)
                ->assertViewIs('pages.contact-thanks');
    }
}
