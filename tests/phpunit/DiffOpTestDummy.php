<?php

namespace Diff\Tests;

/**
 * Dummy class for testing DiffOps.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @since 0.5
 *
 * @ingroup DiffTest
 *
 * @group Diff
 *
 * @licence GNU GPL v2+
 * @author Daniel Kinzler
 */

class DiffOpTestDummy {
	public $text;

	public function __construct( $text ) {
		$this->text = $text;
	}

	public function __toString() {
		return get_class( $this ) . ': ' . $this->text;
	}

	public static function arrayalize( $obj ) {
		if ( $obj instanceof DiffOpTestDummy ) {
			return array(
				'type' => 'Dummy',
				'text' => $obj->text,
			);
		}

		return $obj;
	}

	public static function objectify( $array ) {
		if ( is_array( $array ) && isset( $array['type'] ) && $array['type'] === 'Dummy' ) {
			return new DiffOpTestDummy( $array['text'] );
		}

		return $array;
	}
}