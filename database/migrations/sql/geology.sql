INSERT INTO `elements` (`id`, `symbol`, `en_element_name`, `ru_element_name`, `atomic_weight`, `created_at`, `updated_at`) VALUES
(1, 'S', 'Sulfur', 'Сера', 32.00, NULL, NULL),
(2, 'Fe', 'Ferrum', 'Железо', 55.00, NULL, NULL);

INSERT INTO `minerals` (`id`, `ru_name`, `en_name`, `formula`, `min_class_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Пирротин', 'Pyrrhotite', 'FenSn+1', 2, NULL, '2018-09-13 10:34:36', '2018-09-13 10:34:36'),
(2, 'Пирит', 'Pyrite', 'FeS2', 2, NULL, '2018-09-13 10:35:57', '2018-09-13 10:35:57');

INSERT INTO `element_mineral` (`id`, `mineral_id`, `element_id`, `percent_in_mineral`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 37.67, NULL, NULL),
(2, 1, 2, 62.33, NULL, NULL),
(3, 2, 1, 53.45, NULL, NULL),
(4, 2, 2, 46.55, NULL, NULL);