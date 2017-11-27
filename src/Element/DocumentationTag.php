<?php

/*
 * This file is part of the Blox package.
 *
 * Copyright © 2014 Erin Millard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eloquent\Blox\Element;

/**
 * Represents a single documentation tag.
 */
class DocumentationTag
{
    private $name;
    private $content;

    /**
     * Construct a new documentation tag.
     *
     * @param string      $name    The tag name.
     * @param string|null $content The tag content.
     */
    public function __construct($name, $content = null)
    {
        $this->name    = $name;
        $this->content = $content;
    }

    /**
     * Visit this tag.
     *
     * @param DocumentationVisitorInterface $visitor The visitor to accept.
     *
     * @return mixed The visitor's result.
     */
    public function accept(DocumentationVisitorInterface $visitor)
    {
        return $visitor->visitDocumentationTag($this);
    }

    /**
     * Get the tag content.
     *
     * @return string|null The tag content.
     */
    public function content()
    {
        return $this->content;
    }

    /**
     * Get the tag name.
     *
     * @return string The tag name.
     */
    public function name()
    {
        return $this->name;
    }
}
