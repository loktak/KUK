<?php

/**
 * Подключает шаблон, передает туда данные и возвращает итоговый HTML контент
 * @param string $name Путь к файлу шаблона относительно папки templates
 * @param array $data Ассоциативный массив с данными для шаблона
 *
 * @return string Итоговый HTML
 */
function include_template($name, $data)
{
    $name = 'templates/' . $name;


    $result = '';

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

function include_template_2($name, $data)
{
    $name = '../templates/' . $name;


    $result = '';

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}


/**
 * Создает подготовленное выражение на основе готового SQL запроса и переданных данных
 *
 * @param $link mysqli Ресурс соединения
 * @param $sql string SQL запрос с плейсхолдерами вместо значений
 * @param array $data Данные для вставки на место плейсхолдеров
 *
 * @return mysqli_stmt Подготовленное выражение
 */
function db_get_prepare_stmt($link, $sql, $data = [])
{
    $stmt = mysqli_prepare($link, $sql);

    if ($stmt === false) {
        $errorMsg = 'Не удалось инициализировать подготовленное выражение: ' . mysqli_error($link);
        die($errorMsg);
    }

    if ($data) {
        $types = '';
        $stmt_data = [];

        foreach ($data as $value) {
            $type = 's';

            if (is_int($value)) {
                $type = 'i';
            } else {
                if (is_string($value)) {
                    $type = 's';
                } else {
                    if (is_double($value)) {
                        $type = 'd';
                    }
                }
            }

            if ($type) {
                $types .= $type;
                $stmt_data[] = $value;
            }
        }

        $values = array_merge([$stmt, $types], $stmt_data);

        $func = 'mysqli_stmt_bind_param';
        $func(...$values);

        if (mysqli_errno($link) > 0) {
            $errorMsg = 'Не удалось связать подготовленное выражение с параметрами: ' . mysqli_error($link);
            die($errorMsg);
        }
    }

    return $stmt;
}


/**
 * Функция берет данные из запроса sql и возвращает двумерный массив
 * @param mysqli $link
 * @param string $sql запрос в базу данных
 *
 * @return array двумерный массив данных
 */
function get_data($link, $sql)
{
    $result = mysqli_query($link, $sql);
    if (!$result) {
        $error = mysqli_error($link);
        die("Ошибка MySQL: " . $error);
    }
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $result;
}

/**
 * Подключаемся к базе данных и проверяем есть подключение или нет.
 * @param string $host Наименование локального хоста.
 * @param string $user Имя пользователя БД
 * @param string $password Пароль пользователя БД
 * @param string $database Имя БД
 *
 * @return mysqli
 */
function database_conecting($host, $user, $password, $database)
{
    $link = mysqli_connect($host, $user, $password, $database);
    if ($link === false) {
        die("Ошибка подключения: " . mysqli_connect_error());
    }
    mysqli_set_charset($link, "utf8");

    return $link;
}

/**
 *This function replaces special characters with mnemonic characters
 *
 * @param string $user_content
 * @return string
 * @author Arseny Spirin <spirinars@ya.ru>
 */
function anti_xss($user_content)
{
    return htmlspecialchars($user_content, ENT_QUOTES);
}


/**
 * Функция проверяет заполнены ли поля формы по указаным ключам
 * @param array $required_fields
 *
 * @return array массив данных
 */
function check_required_fields($required_fields)
{
    $errors = [];
    foreach ($required_fields as $key => $field) {
        if (empty($_POST[$field])) {
            $errors[$field] = "Поле должно быть заполнено";
        }
    }

    return $errors;
}

/**
 * Функция проверяет файл загруженный через форму обратной связи.
 * и если он соответствует критериям загружает его в папку uploads
 * @param array $files массив данных о файле
 *
 * @return string Ошибку если валидация не прошла
 */
function upload_post_picture($files, $folder = '/uploads/')
{
    if (($files['photo']['size'] >= 104857600)) {
        return 'прикрепленный файл слишком большой';
    }
    $file_name = $files['photo']['name'];
    $file_path = __DIR__.$folder;
    $valid_mime_types = ['image/png', 'image/jpeg', 'image/gif'];
    if (!in_array(mime_content_type($files['photo']['tmp_name']), $valid_mime_types)) {
        return 'Не подходящий формат прикрепленного изображения. Используйте jpg, png или gif.';
    }
    move_uploaded_file($files['photo']['tmp_name'], $file_path.$file_name);
}


/**
 * Функция определяет путь до загруженного файла основоваясь на том существует имя файла в массиве $_FILES или нет.
 * Она нужна что бы обойти ограничение по колличеству if. как это сделать по другому я не знаю.
 * @param string $url
 * @param string $file_name
 *
 * @return string путь до загруженного файла
 */
function get_file_path($url, $file_name)
{
    if (!$file_name) {
        $file_name = basename($url);
    }

    return $file_name;
}

/**
 * Функция создает значение на основании того есть ли такое значение в POST запросе
 * @param string $name название поля по которому ищем
 *
 * @return string значение из POST запроса
 */
function getPostValue($name)
{
    $result = $_POST[$name] ?? "";

    return anti_xss($result);
}