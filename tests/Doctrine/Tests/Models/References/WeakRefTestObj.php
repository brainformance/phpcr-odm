<?php

namespace Doctrine\Tests\Models\References;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCRODM;

/**
 * @PHPCRODM\Document()
 */
class WeakRefTestObj
{
    /** @PHPCRODM\Id */
    public $id;
    /** @PHPCRODM\ReferenceOne(targetDocument="RefRefTestObj", weak="uuid") */
    public $reference;
    /** @PHPCRODM\String */
    public $name;
}
