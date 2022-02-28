<?php

return [
    "title" => "Ближайшие события",
    "button" => [
        "title" => "Ближайшие события"
    ],
    "past" => "Прошедшие",
    "today" => "Сегодня",
    "nearest" => "Скоро",
    "not_found" => "Ближайших событий нет",
    "birth" => [
        "name" => "День рождения",
        "will_be" => "будет",
        "fulfilled" => "исполнилось",
        "it_would_be" => "было бы"
    ],
    "death" => [
        "name" => "День памяти",
        "passed" => ":interval назад",
        "passed_age" => ":interval назад в возрасте :age"
    ],
    "subscription" => [
        "create" => [
            "title" => "Подписка на ближайшие события",
            "manual" => [
                "what" => "Здесь Вы можете оформить подписку на получение ближайших событий.",
                "description" => "
                    Подписка доступна только для пользователей Телеграм! Для создания подписки нужно запустить телеграм бота, 
                    перейдя по ссылке (ссылка ниже), и отправить ему ниже расположенный код. Дождаться оформления подписки.
                    Отписаться можно в любое время на данном сайте, или просто заблокировав телеграм бота.",
                "call_action" => "Для создания подписки выполните шаги (важно соблюдать порядок):",
                "step_1_1" => "Перейдите по ссылке:",
                "step_1_2" => "В зависимости от особенностей Вашего программного обеспечения, Вы будите сразу перенаправлены на Телеграм
                    или у Вас запросят подтверждения перехода на внешний ресурс, возможно Вам необходимо будет выбрать программу Телеграм
                    из списка. Выполните эти действия.",
                "step_1_3" => "Если у Вас не получилось выполнить предыдущее действие, можете вручную открыть Телеграм, и через \"поиск\" найти 
                    телеграм бота с именем:",
                "step_2" => "Запустите телеграм бота.",
                "step_3" => "Отправьте ему сообщение с кодом:",
                "step_4" => "И наконец завершите шаги, оформлением подписки. Нажмите",
                "button" => [
                    "copy" => [
                        "tooltip" => "Скопировать в буфер обмена"
                    ],
                    "register" => [
                        "label" => "Подписаться",
                        "tooltip" => "Оформить подписку"
                    ]
                ]
            ]
        ],
        "edit" => [
            "info" => "Вы подписаны на получение уведомлений о ближайших событиях."
        ],
        "crud" => [
            "create" => [
                "tooltip" => "Подписаться на получение событий"
            ],
            "delete" => [
                "label" => "Отписаться",
                "tooltip" => "Отписаться от получения событий",
                "confirmation" => "Подписка на получение ближайших событий будет удалена. Продолжить?"
            ],
            "message" => [
                "ok" => [
                    "store" => "Вы успешно подписались, на получение ближайших событий.",
                    "delete" => "Вы успешно отписались."
                ],
                "error" => [
                    "store" => "Время ожидания истекло! \nОтвет от телеграм бота не получен. \nПопробуйте ещё раз, если ошибка будет повторяться обратитесь к администратору сайта."
                ]
            ],
        ]
    ]
];
