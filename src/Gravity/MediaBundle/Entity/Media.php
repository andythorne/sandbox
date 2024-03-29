<?php


namespace Gravity\MediaBundle\Entity;

use Sonata\MediaBundle\Entity\BaseMedia;

/**
 * Class Media
 *
 * @package Gravity\MediaBundle\Entity
 * @author  Andy Thorne <contrabandvr@gmail.com>
 */
class Media extends BaseMedia
{
    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
