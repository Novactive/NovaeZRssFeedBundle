<?php
/**
 * NovaeZRssFeedBundle.
 *
 * @package   NovaeZRssFeedBundle
 *
 * @author    Novactive
 * @copyright 2018 Novactive
 * @license   https://github.com/Novactive/NovaeZRssFeedBundle/blob/master/LICENSE
 */

namespace Novactive\EzRssFeedBundle\Repository\Values;

/**
 * RssFeedsItemsRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FeedValueObject
{
    private $content;

    private $mapping;

    public function __construct($content, $mapping)
    {
        $this->content = $content;
        $this->mapping = $mapping;
    }

    public function getFeedItemTitle()
    {
        return $this->mapping['title'];
    }

    public function getFeedItemDescription()
    {
        return $this->mapping['description'];
    }

    public function getFeedItemMediaLink()
    {
        return $this->mapping['media'];
    }

    public function getFeedItemCategoy()
    {
        return $this->mapping['category'];
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getMapping()
    {
        return $this->mapping;
    }
}
