<?php
namespace Modules\Pages\Repositories;

use Modules\Core\Repositories\RepositoryInterface;

interface PageInterface extends RepositoryInterface
{

    /**
     * Get a page by its uri
     *
     * @param  string                      $uri
     * @return Modules\Pages\Entities\Page $model
     */
    public function getFirstByUri($uri);

    /**
     * Get submenu for a page
     *
     * @return Collection
     */
    public function getSubMenu($uri, $all = false);

    /**
     * Get pages linked to module to build routes
     *
     * @return array
     */
    public function getForRoutes();

    /**
     * Get all uris
     *
     * @return array
     */
    public function allUris();
}
