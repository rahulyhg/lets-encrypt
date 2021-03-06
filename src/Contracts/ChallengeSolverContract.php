<?php

namespace Hyn\LetsEncrypt\Contracts;

use Hyn\LetsEncrypt\Resources\Challenge;

interface ChallengeSolverContract
{
    /**
     * Solves a certain challenge.
     *
     * Return false if not possible.
     *
     * @param Challenge $challenge
     * @param \stdClass $payload
     *
     * @return bool
     */
    public function solve(Challenge $challenge, $payload);
}
