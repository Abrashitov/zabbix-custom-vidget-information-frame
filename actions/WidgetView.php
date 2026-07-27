<?php

namespace Modules\InformationFrame\Actions;

use CControllerDashboardWidgetView;
use CControllerResponseData;

class WidgetView extends CControllerDashboardWidgetView {

	protected function doAction(): void {

		$this->setResponse(new CControllerResponseData([
			'name' => $this->getInput('name', $this->widget->getDefaultName()),

			'text' => $this->fields_values['text'] ?? '',

			'text_size' => $this->fields_values['text_size'] ?? 100,
			'text_alignment' => $this->fields_values['text_alignment'] ?? 1,
			'text_font_style' => $this->fields_values['text_font_style'] ?? 0,
			'text_font' => $this->fields_values['text_font'] ?? 0,

			'user' => [
				'debug_mode' => $this->getDebugMode()
			]
		]));
	}
}
