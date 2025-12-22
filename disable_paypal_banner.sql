-- SQL запит для вимкнення банера PayPal (модуль Carousel з ID=29)
-- Цей запит змінює status з "1" (увімкнено) на "0" (вимкнено) в налаштуваннях модуля

UPDATE `oc_module` 
SET `setting` = JSON_SET(`setting`, '$.status', '0')
WHERE `module_id` = 29 
AND `code` = 'carousel'
AND JSON_EXTRACT(`setting`, '$.name') = 'Home Page Carousel';

-- Альтернативний варіант (якщо JSON_SET не працює):
-- UPDATE `oc_module` 
-- SET `setting` = REPLACE(`setting`, '"status":"1"', '"status":"0"')
-- WHERE `module_id` = 29 
-- AND `code` = 'carousel';

-- Перевірка результату:
-- SELECT `module_id`, `name`, `code`, `setting` FROM `oc_module` WHERE `module_id` = 29;

