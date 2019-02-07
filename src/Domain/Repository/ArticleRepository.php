<?php

namespace Encyklopedia\Domain\Repository;

use Encyklopedia\Domain\Exception\NotFoundInDbException;
use Encyklopedia\Domain\Model\Article;
use Encyklopedia\Domain\Model\Data;
use Encyklopedia\Domain\Model\Template\Template;

class ArticleRepository extends AbstractRepository {
    public function findBySlug(string $slug) : Article {
        $query = "
            SELECT a.*, t.*, t.id as template_id, t.created as template_created, t.updated as template_updated FROM articles a JOIN templates t ON t.id = a.template_id WHERE slug = ?
        ";
        $stmt = $this->dbal->prepare($query);
        $stmt->bindValue(1, $slug);
        $stmt->execute();
        $result = $stmt->fetch();
        if($result === false) {
            throw new NotFoundInDbException();
        }
        return new Article(
            $result['id'],
            $result['title'],
            new \DateTime($result['created']),
            new \DateTime($result['updated']),
            new Template($result['template_id'], $result['name'], [], new \DateTime($result['template_created']), new \DateTime($result['template_updated'])),
            $result['slug'],
            new Data(json_decode($result['data'], true)),
            $result['content']
        );
    }
}