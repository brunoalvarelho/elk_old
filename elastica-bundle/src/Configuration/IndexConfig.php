<?php

/*
 * This file is part of the FOSElasticaBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * This file is part of the FOSElasticaBundle project.
 *
 * (c) Tim Nagel <tim@nagel.com.au>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\ElasticaBundle\Configuration;

class IndexConfig implements IndexConfigInterface
{
    use IndexConfigTrait;

    /**
     * Indicates if the index should use an alias, allowing an index repopulation to occur
     * without overwriting the current index.
     *
     * @var bool
     */
    private $useAlias = false;

    /**
     * Constructor expects an array as generated by the Container Configuration builder.
     *
     * @param string       $name
     * @param TypeConfig[] $types
     * @param array        $config
     */
    public function __construct($name, array $types, array $config)
    {
        $this->elasticSearchName = isset($config['elasticSearchName']) ? $config['elasticSearchName'] : $name;
        $this->name = $name;
        $this->settings = isset($config['settings']) ? $config['settings'] : [];
        $this->types = $types;
        $this->useAlias = isset($config['useAlias']) ? $config['useAlias'] : false;
    }

    /**
     * @return bool
     */
    public function isUseAlias()
    {
        return $this->useAlias;
    }
}
