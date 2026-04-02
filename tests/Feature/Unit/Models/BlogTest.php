<?php

namespace Tests\Feature\Unit\Models;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BlogTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test che un blog appartiene a una categoria
     */
    public function test_blog_belongs_to_category(): void
    {
        $category = Category::factory()->create();
        $blog = Blog::factory()->create(['category_id' => $category->id]);

        $this->assertInstanceOf(Category::class, $blog->category);
        $this->assertEquals($category->id, $blog->category->id);
    }

    /**
     * Test che il fillable funziona correttamente
     */
    public function test_blog_fillable_attributes(): void
    {
        $blogData = [
            'slug' => 'test-blog',
            'title' => 'Test Blog Title',
            'excerpt' => 'Test excerpt',
            'content' => 'Test content',
            'category_id' => Category::factory()->create()->id,
            'published' => true,
            'published_at' => now(),
        ];

        $blog = Blog::create($blogData);

        $this->assertEquals('test-blog', $blog->slug);
        $this->assertEquals('Test Blog Title', $blog->title);
        $this->assertTrue($blog->published);
    }

    /**
     * Test dello scope published
     */
    public function test_published_scope(): void
    {
        $category = Category::factory()->create();

        // Crea articoli pubblicati
        Blog::factory()->create([
            'category_id' => $category->id,
            'published' => true,
            'published_at' => now()->subDay(),
        ]);

        // Crea articolo non pubblicato
        Blog::factory()->create([
            'category_id' => $category->id,
            'published' => false,
        ]);

        // Crea articolo pubblicato ma con data futura
        Blog::factory()->create([
            'category_id' => $category->id,
            'published' => true,
            'published_at' => now()->addDay(),
        ]);

        $publishedBlogs = Blog::published()->get();

        $this->assertEquals(1, $publishedBlogs->count());
    }

    /**
     * Test dello scope draft
     */
    public function test_draft_scope(): void
    {
        $category = Category::factory()->create();

        Blog::factory()->create(['category_id' => $category->id, 'published' => true]);
        Blog::factory()->create(['category_id' => $category->id, 'published' => false]);

        $draftBlogs = Blog::draft()->get();

        $this->assertEquals(1, $draftBlogs->count());
        $this->assertFalse($draftBlogs->first()->published);
    }

    /**
     * Test del metodo getUrlAttribute
     */
    public function test_get_url_attribute(): void
    {
        $blog = Blog::factory()->create(['slug' => 'test-article']);

        $this->assertEquals(route('blog.show', 'test-article'), $blog->url);
    }
}
