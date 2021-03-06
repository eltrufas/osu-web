<?php

/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;

abstract class Controller extends BaseController
{
    /**
     * Extracts all the parameters from the request to be used a payment processor.
     *
     * @param Request $request
     * @return array
     */
    protected static function extractParams(Request $request)
    {
        $params = $request->input();
        if ($request->isJson()) {
            $params = array_merge($params, $request->json()->all());
        }

        return $params;
    }
}
