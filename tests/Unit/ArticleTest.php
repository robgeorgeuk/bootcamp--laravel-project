<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Article;

class ArticleTest extends TestCase
{
    private $article;

    public function __construct()
    {
        parent::__construct();

        $this->article = new Article([
            "title" => "Hello",
            "content" => "Blah blah blah",
        ]);

    }

    public function testTitle()
    {
        $this->assertSame("Hello", $this->article->title);
    }

    public function testTruncate()
    {
        $this->assertSame("Blah blah blah", $this->article->truncate());

        $article = new Article([
            "title" => "Hello",
            "content" => "Blah blah blah blah blah blah blah"
        ]);

        $this->assertSame("Blah blah blah blah...", $article->truncate());
    }
}
