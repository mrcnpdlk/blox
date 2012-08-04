<?php

/*
 * This file is part of the Blox package.
 *
 * Copyright © 2012 Erin Millard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// @codeCoverageIgnoreStart

namespace Eloquent\Blox;

interface DocumentationBlockParser
{
  /**
   * @param string $blockComment
   *
   * @return DocumentationBlock
   */
  public function parseBlockComment($blockComment);
}