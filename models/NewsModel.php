<?php

class NewsModel
    extends AbstractDBModel
{
    protected static $table = 'News';

    public static function newsPreview($articles, $lenght){
        $i = 0;
        foreach($articles as $article){
            $articles[$i]->article = mb_strcut($article->article, 0, $lenght);
            $i++;
        }
        return $articles;
    }
}