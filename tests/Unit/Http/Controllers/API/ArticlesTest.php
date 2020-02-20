<?php

namespace Tests\Unit\Http\Controllers\API;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

use App\Http\Requests\API\ArticleRequest;
use App\Http\Controllers\API\Articles;
use App\Article;

class ArticlesTest extends TestCase
{
    use DatabaseMigrations;

    public function testStore()
    {
        $request = ArticleRequest::create("/api/articles", "POST", [
            "title" => "foo",
            "content" => "bar",
        ]);

        $controller = new Articles();
        $result = $controller->store($request);
        $this->assertSame("bar", $result->content);

        $article = Article::all()->first();
        $this->assertSame("bar", $article->content);
    }
}
