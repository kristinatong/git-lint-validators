<?php

declare(strict_types=1);

/*
 * Copyright (C) 2016 Billie Thompson
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace PurpleBooth\GitLintValidators\Status;

use PurpleBooth\GitLintValidators\Validator\LimitTheTitleLengthTo69CharactersValidator;

/**
 * This is the status returned when the LimitTheTitleLengthTo69CharactersValidator identifies a problem.
 *
 * @see     LimitTheTitleLengthTo69CharactersValidator
 */
class LimitTheTitleLengthTo69CharactersStatus implements Status
{
    /**
     * Get the importance of this status.
     *
     * The lower the value the less important it is, the higher the more important.
     *
     * @return int
     */
    public function getWeight() : int
    {
        return Status::WEIGHT_ERROR;
    }

    /**
     * A human readable message that describes this state.
     *
     * This will be displayed to the user via the GitHub state
     *
     * @return string
     */
    public function getMessage() : string
    {
        return 'Please limit the subject line length of the commit message to 69 characters';
    }

    /**
     * Is true if the status is one that should not be taken as indicative of a incorrectly formatted message.
     *
     * @return bool
     */
    public function isPositive() : bool
    {
        return false;
    }

    /**
     * Get a URL with further explanation about this commit message status.
     *
     * @return string
     */
    public function getDetailsUrl() : string
    {
        return 'http://chris.beams.io/posts/git-commit/#limit-50';
    }
}
