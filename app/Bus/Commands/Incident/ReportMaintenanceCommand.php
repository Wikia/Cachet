<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Commands\Incident;

final class ReportMaintenanceCommand
{
    /**
     * The maintenance name.
     *
     * @var string
     */
    public $name;

    /**
     * The maintenance message.
     *
     * @var string
     */
    public $message;

    /**
     * Whether to notify about the maintenance or not.
     *
     * @var bool
     */
    public $notify;

    /**
     * Timestamp of when the maintenance is due to start.
     *
     * @var string
     */
    public $timestamp;

    /**
     * Timestamp of when the maintenance is due to end (optional).
     *
     * @var string
     */
    public $timestamp_end;

    /**
     * Comma separated list of e-mails to send notifications to.
     *
     * @var string
     */
    public $directNotify;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'      => 'required|string',
        'message'   => 'string',
        'notify'    => 'bool',
        'timestamp' => 'string',
        'timestamp_end' => 'string',
    ];

    /**
     * Create a new report maintenance command instance.
     *
     * @param string $name
     * @param string $message
     * @param bool   $notify
     * @param string $timestamp
     * @param string $timestamp_end
     * @param string $directNotify
     *
     * @return void
     */
    public function __construct($name, $message, $notify, $timestamp, $timestamp_end, $directNotify = false)
    {
        $this->name = $name;
        $this->message = $message;
        $this->notify = $notify;
        $this->timestamp = $timestamp;
        $this->timestamp_end = $timestamp_end;
        $this->directNotify = $directNotify;
    }
}
