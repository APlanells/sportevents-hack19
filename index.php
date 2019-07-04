$return_defaults = array(
                              'version' => $SETUP['SkillVersion'],
                              'sessionAttributes' => array(
                              'countActionList' => array(
                                                                       'read' => true,
                                                                       'category' => true
                                                         )
                                          ) ,
                                          'response' => array(
                                                         'outputSpeech' => array(
                                                                       'type' => "PlainText",
                                                                       'text' => "ok"
                                                         ) ,
                                                         'card' => array(
                                                                       'type' => "Simple",
                                                                       'title' => "Lights Home",
                                                                       'content' => "Orden aceptada Albert,acabo de activar las luces"
                                                         ) ,
                                                         'reprompt' => array(
                                                                       'outputSpeech' => array(
                                                                                    'type' => "PlainText",
                                                                                     'text' => "Te ayudo en algo mas?"
                                                                       )
                                                         )
                                          ) ,
                                          'shouldEndSession' => false
                            );

                            $ReturnValue = json_encode($return_defaults);
                            echo $ReturnValue;

?>
