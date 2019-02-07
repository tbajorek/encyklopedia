<?php

namespace Encyklopedia\Domain\Model;

use Encyklopedia\Domain\Model\Template\Template;

class Article {
    private $id;
    private $title;
    private $created;
    private $updated;
    private $template;
    private $slug;
    private $data;
    private $content;

    /**
     * Article constructor.
     * @param $id
     * @param $title
     * @param $created
     * @param $updated
     * @param $template
     * @param $slug
     * @param $data
     * @param $content
     */
    public function __construct(?string $id = null, string $title, \DateTime $created, \DateTime $updated, Template $template, string $slug, Data $data, string $content)
    {
        $this->id = $id;
        $this->title = $title;
        $this->created = $created;
        $this->updated = $updated;
        $this->template = $template;
        $this->slug = $slug;
        $this->data = $data;
        $this->content = $content;
    }


}