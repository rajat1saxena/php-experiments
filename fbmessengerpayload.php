<?php

$postMessage = array(
							'attachment' => array(
								'type' => 'template',
								'payload' => array(
									'template_type' => 'generic',
									'elements' => array(
											array(
												'title' => 'Tell us about the platform you want to develop for',
												'buttons' => array(
													array(
														'type' => 'postback',
														'title' => 'Web',
														'payload' => 'HELP_PLATFORM_WEB'
													),
													array(
														'type' => 'postback',
														'title' => 'Mobile',
														'payload' => 'HELP_PLATFORM_MOBILE'
													),
													array(
														'type' => 'postback',
														'title' => 'Both',
														'payload' => 'HELP_PLATFORM_BOTH'
													)
												)
											)
										)
									)
								)
							);

echo json_encode($postMessage);
?>