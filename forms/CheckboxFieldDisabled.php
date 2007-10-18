<?php

/**
 * Single checkbox field.
 */
class CheckboxFieldDisabled extends CheckboxField {
	/**
	 * Returns a single checkbox field - used by templates.
	 */
	function Field() {
		if($this->value) $checked = "checked = \"checked\"";
		return "<input class=\"checkbox\" disabled=\"disabled\" type=\"checkbox\" id=\"" . $this->id() . "\" name=\"{$this->name}\" $checked />";
	}
}

?>