<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\HtmlString;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment;
use League\CommonMark\Extension\Table\TableExtension;


class Post extends Model
{
    protected $fillable = ['title', 'excerpt', 'imageUrl', 'body'];

    public function parse($text)
    {

        $environment = Environment::createCommonMarkEnvironment();


        $environment->addExtension(new TableExtension);

        $converter = new CommonMarkConverter([
            'allow_unsafe_links' => false,
        ], $environment);

        return new HtmlString($converter->convertToHtml($text));
    }

    public function simpleTime()
    {
        return date_format(date_create($this->created_at), 'M dS');
    }
}
