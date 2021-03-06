<?php
/**
 * Robin NTLM
 *
 * @copyright 2015 Robin Powered, Inc.
 * @link https://robinpowered.com/
 */

namespace Robin\Ntlm\Hasher;

use Robin\Ntlm\Credential\HashCredentialInterface;
use Robin\Ntlm\Credential\Password;

/**
 * Hashes a {@link Password} credential into a {@link HashCredentialInterface}.
 *
 * Not to be confused with the
 * {@link \Robin\Ntlm\Crypt\Hasher\HasherInterface cryptographic hasher}
 */
interface HasherInterface
{

    /**
     * Hashes a given {@link Password} into a {@link HashCredentialInterface}.
     *
     * @param Password $password The password to hash.
     * @return HashCredentialInterface The resulting hash.
     */
    public function hash(Password $password);
}
