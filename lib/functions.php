<?php

// Functions to be provided to OpenAI

$FUNCTIONS = [
    [
        "name" => "Inspect",
        "description" => "Look at or Inspects NPC, Actor, or being",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Target NPC, Actor, or being",
                    "enum" => $FUNCTION_PARM_INSPECT

                ]
            ],
            "required" => ["target"],
        ],
    ],
    [
        "name" => "InspectSurroundings",
        "description" => "Looks for beings nearby",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Keep it blank",
                ]
            ],
            "required" => []
        ],
    ],
    [
        "name" => "MoveTo",
        "description" => "Walk to a visible building or visible actor, also used to guide {$GLOBALS["PLAYER_NAME"]} to a actor or building.",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Visible Target NPC, Actor, or being, or building.",
                    "enum" => $FUNCTION_PARM_MOVETO
                ]
            ],
            "required" => ["target"],
        ],
    ],
    [
        "name" => "OpenInventory",
        "description" => "Initiates trading or exchange items with {$GLOBALS["PLAYER_NAME"]}",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Keep it blank",
                ]
            ],
            "required" => []
        ],
    ],
    [
        "name" => "Attack",
        "description" => "Attacks actor, npc or being. but always avoid the deaths of innocent actors.",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Target NPC, Actor, or being",
                ]
            ],
            "required" => ["target"],
        ]
    ],
    [
        "name" => "Follow",
        "description" => "Moves to and follow a NPC, an actor or being",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Target NPC, Actor, or being",
                ]
            ],
            "required" => ["target"],
        ]
    ],
    [
        "name" => "CheckInventory",
        "description" => "Search in {$GLOBALS["HERIKA_NAME"]}\'s inventory, backpack or pocket",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "item to look for, if empty all items will be returned",
                ]
            ],
            "required" => []
        ]
    ],
    [
        "name" => "SheatheWeapon",
        "description" => "Sheates current weapon",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Keep it blank",
                ]
            ],
            "required" => []
        ]
    ],
    [
        "name" => "Relax",
        "description" => "Makes{$GLOBALS["HERIKA_NAME"]} to stop current action and relax herself",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Keep it blank",
                ]
            ],
            "required" => []
        ]
    ],
    [
        "name" => "LeadTheWayTo",
        "description" => "Only use if {$GLOBALS["PLAYER_NAME"]} explicitly orders it. Guide {$GLOBALS["PLAYER_NAME"]} to a Town o City. ",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "location" => [
                    "type" => "string",
                    "description" => "Town or City to travel to, only if {$GLOBALS["PLAYER_NAME"]} explicitly orders it"
                    
                ]
            ],
            "required" => ["location"]
        ]
    ],
    [
        "name" => "TakeASeat",
        "description" => "{$GLOBALS["HERIKA_NAME"]} seats in nearby chair or furniture ",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Keep it blank",
                ]
            ],
            "required" => [""]
        ]
    ],
    [
        "name" => "ReadQuestJournal",
        "description" => "Only use if {$GLOBALS["PLAYER_NAME"]} explicitly ask for a quest. Get info about current quests",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "id_quest" => [
                    "type" => "string",
                    "description" => "Specific quest to get info for, or blank to get all",
                ]
            ],
            "required" => [""]
        ]
    ],
    [
        "name" => "SetSpeed",
        "description" => "Set {$GLOBALS["HERIKA_NAME"]} speed when moving or travelling",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "speed" => [
                    "type" => "string",
                    "description" => "Speed",
                    "enum" => ["run", "fastwalk", "jog", "walk"]
                ]

            ],
            "required" => ["speed"]
        ]
    ],
    [
        "name" => "GetDateTime",
        "description" => "Get Current Date and Time",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "datestring" => [
                    "type" => "string",
                    "description" => "Formatted date and time",
                ]

            ],
            "required" => []
        ]
    ],
    [
        "name" => "SearchDiary",
        "description" => "Read {$GLOBALS["HERIKA_NAME"]}'s diary to make her remember something. Search in diary index",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "keyword" => [
                    "type" => "string",
                    "description" => "keyword to search in full-text query syntax",
                ]
            ],
            "required" => [""]
        ]
    ],
    [
        "name" => "SetCurrentTask",
        "description" => "Set the current plan of action or task or quest",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "description" => [
                    "type" => "string",
                    "description" => "Short description of current task talked by the party",
                ]
            ],
            "required" => ["description"]
        ]
    ], 
    /*[
        "name" => "GetTopicInfo",
        "description" => "Get information about a topic or character on Herika's long-term memory.",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "topic" => [
                    "type" => "string",
                    "description" => "Topic or Characters",
                ]
            ],
            "required" =>["topic"]
        ]
    ]*/
];


$FUNCTIONS_SPECIAL_CONTEXT = [

    [
        "name" => "WriteIntoDiary",
        "description" => "Summarize briefly the recent events and dialogues and write them down in Herika's diary.",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "topic" => [
                    "type" => "string",
                    "description" => "Suggested topic name",
                ],
                "content" => [
                    "type" => "string",
                    "description" => "The summarized content"
                ],
                "tags" => [
                    "type" => "string",
                    "description" => "Relevant tags for later search"
                ],
                "people" => [
                    "type" => "string",
                    "description" => "Related People"
                ],
                "location" => [
                    "type" => "string",
                    "description" => "Location"
                ]


            ],
            "required" => ["topic", "content", "tags", "people","location"]
        ]
    ]
];


$FUNCTIONS_GHOSTED =  [
        "name" => "ReadDiaryPage",
        "description" => "Read {$GLOBALS["HERIKA_NAME"]}'s diary to access a specific topic",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "topic" => [
                    "type" => "string",
                    "description" => "topic to search in full-text query syntax",
                ]
            ],
            "required" => ["topic"]
        ]
    ]
    ;
?>
