<?php namespace  LynxGroup\Component\Localization;

use LynxGroup\Component\Odm\Document;

class Culture extends Document
{
	public function setLocale($locale)
	{
		$this->data['locale'] = $locale;

		return $this->setDirty();
	}

	public function getLocale()
	{
		return isset($this->data['locale']) ? $this->data['locale'] : null;
	}

	public function setHint($hint)
	{
		$this->data['hint'] = $hint;

		return $this->setDirty();
	}

	public function getHint()
	{
		return isset($this->data['hint']) ? $this->data['hint'] : null;
	}

	public function setPublished($published)
	{
		$this->data['published'] = $published;

		return $this->setDirty();
	}

	public function getPublished()
	{
		return isset($this->data['published']) ? $this->data['published'] : false;
	}
}
