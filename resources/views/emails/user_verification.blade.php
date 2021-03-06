{{--
    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
Hi {{ $user->username }},

An action performed on your account from {{ $requestCountry ?? 'unknown country' }} requires verification.

Your verification code is: {{ $keys['main'] }}
You can enter the code with or without spaces.

Alternatively, you can also visit this link below to finish verification:

{{ route('account.verify', ['key' => $keys['link']]) }}

If you did not request this, please REPLY IMMEDIATELY as your account may be in danger.

@include('emails._signature')
