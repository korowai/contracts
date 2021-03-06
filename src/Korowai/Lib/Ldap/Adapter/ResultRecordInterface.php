<?php
/**
 * @file src/Korowai/Lib/Ldap/Adapter/ResultRecordInterface.php
 *
 * This file is part of the Korowai package
 *
 * @author Paweł Tomulik <ptomulik@meil.pw.edu.pl>
 * @package korowai\contracts
 * @license Distributed under MIT license.
 */

declare(strict_types=1);

namespace Korowai\Lib\Ldap\Adapter;

/**
 * @author Paweł Tomulik <ptomulik@meil.pw.edu.pl>
 *
 * An interface for either entry or reference returned by LDAP search.
 */
interface ResultRecordInterface
{
    /**
     * Returns Distinguished Name (DN) of the result entry
     *
     * @return string Distinguished Name of the result entry
     */
    public function getDn() : string;
}

// vim: syntax=php sw=4 ts=4 et:
