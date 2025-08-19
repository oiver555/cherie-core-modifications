<?php
if (! defined('ABSPATH') ) { exit; // Exit if accessed directly
}


use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class Widget_Accordion_Tabs_Modifications extends Widget_Base
{

    public function get_name()
    {
        return 'art-accordion-tabs';
    }

    public function get_title()
    {
        return esc_html__('Accordion Tabs Modifications', 'mola_core');
    }

    public function get_icon()
    {
        return 'eicon-info-box';
    }

    public function get_categories()
    {
        return ['art-cherie-elements'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'section_contact_us',
            [
            'label' => esc_html__('Heading', 'mola_core'),
            'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'list',
            [
                'label' => esc_html__('List', 'mola_core'),
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'the_title',
                        'label' => esc_html__('The title', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'hr',
                        'type' => Controls_Manager::DIVIDER,
                    ],
                    [
                        'name' => 'question_1',
                        'label' => esc_html__('Question #1', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'answer_1',
                        'label' => esc_html__('Answer for the question 1', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr',
                        'type' => Controls_Manager::DIVIDER,
                    ],
                    [
                        'name' => 'question_2',
                        'label' => esc_html__('Question #2', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'answer_2',
                        'label' => esc_html__('Answer for the question 2', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr',
                        'type' => Controls_Manager::DIVIDER,
                    ],
                    [
                        'name' => 'question_3',
                        'label' => esc_html__('Question #3', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'answer_3',
                        'label' => esc_html__('Answer for the question 3', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr',
                        'type' => Controls_Manager::DIVIDER,
                    ],
                    [
                        'name' => 'question_4',
                        'label' => esc_html__('Question #4', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'answer_4',
                        'label' => esc_html__('Answer for the question 4', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr',
                        'type' => Controls_Manager::DIVIDER,
                    ],
                    [
                        'name' => 'question_5',
                        'label' => esc_html__('Question #5', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'answer_5',
                        'label' => esc_html__('Answer for the question 5', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr',
                        'type' => Controls_Manager::DIVIDER,
                    ],
                    [
                        'name' => 'question_6',
                        'label' => esc_html__('Question #6', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'answer_6',
                        'label' => esc_html__('Answer for the question 6', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr',
                        'type' => Controls_Manager::DIVIDER,
                    ],
                    [
                        'name' => 'question_7',
                        'label' => esc_html__('Question #7', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'answer_7',
                        'label' => esc_html__('Answer for the question 7', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr',
                        'type' => Controls_Manager::DIVIDER,
                    ],
                    [
                        'name' => 'question_8',
                        'label' => esc_html__('Question #8', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'answer_8',
                        'label' => esc_html__('Answer for the question 8', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr',
                        'type' => Controls_Manager::DIVIDER,
                    ],
                    [
                        'name' => 'question_9',
                        'label' => esc_html__('Question #9', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'answer_9',
                        'label' => esc_html__('Answer for the question 9', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'hr',
                        'type' => Controls_Manager::DIVIDER,
                    ],
                    [
                        'name' => 'question_10',
                        'label' => esc_html__('Question #10', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'answer_10',
                        'label' => esc_html__('Answer for the question 10', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'question_11',
                        'label' => esc_html__('Question #11', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                        ],
                    [
                        'name' => 'answer_11',
                        'label' => esc_html__('Answer for the question 11', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'question_12',
                        'label' => esc_html__('Question #12', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                        ],
                    [
                        'name' => 'answer_12',
                        'label' => esc_html__('Answer for the question 12', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'question_13',
                        'label' => esc_html__('Question #13', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                        ],
                    [
                        'name' => 'answer_13',
                        'label' => esc_html__('Answer for the question 13', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'question_14',
                        'label' => esc_html__('Question #14', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                        ],
                    [
                        'name' => 'answer_14',
                        'label' => esc_html__('Answer for the question 14', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'question_15',
                        'label' => esc_html__('Question #15', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                        ],
                    [
                        'name' => 'answer_15',
                        'label' => esc_html__('Answer for the question 15', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'question_16',
                        'label' => esc_html__('Question #16', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                        ],
                    [
                        'name' => 'answer_16',
                        'label' => esc_html__('Answer for the question 16', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'question_17',
                        'label' => esc_html__('Question #17', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                        ],
                    [
                        'name' => 'answer_17',
                        'label' => esc_html__('Answer for the question 17', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'question_18',
                        'label' => esc_html__('Question #18', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                        ],
                    [
                        'name' => 'answer_18',
                        'label' => esc_html__('Answer for the question 18', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'question_19',
                        'label' => esc_html__('Question #19', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                        ],
                    [
                        'name' => 'answer_19',
                        'label' => esc_html__('Answer for the question 19', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ],
                    [
                        'name' => 'question_20',
                        'label' => esc_html__('Question #20', 'mola_core'),
                        'default' => '',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'answer_20',
                        'label' => esc_html__('Answer for the question 20', 'mola_core'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('List Content', 'mola_core'),
                        'show_label' => false,
                    ]
                ],
                'title_field' => '{{{the_title}}}',
            ]
        );        

        $this->end_controls_section();



    }

    protected function render( $instance = [] )
    {
        $list = $this->get_settings_for_display('list');

        ?>

        <div class="art-accordion-tabs">
            <div class="art-accordion-tabs-wrapper">
        <?php

        if ($list ) :?>

                    <div class="accordion-menu-tabs-items">
                        <ul class="art-accordion-menu-tabs art-no-list-style">
                            <?php $art_i = 1; ?>
                            <?php foreach ( $list as $item ): ?>
                                <li data-id="<?php echo $art_i; ?>" class="<?php echo ($art_i == 1) ? 'art-active':'art-no-active'; ?>">
                                    <span class="art-first-cl"><?php echo esc_html($item['the_title']); ?></span>
                                </li>
                                <?php $art_i++; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>


                    <div class="art-accordion-menu-info-container">

                        <div class="art-accordion-menu-info">
                            <?php $art_i = 1; ?>
                            <?php foreach ( $list as $item ): ?>
                                <div data-id="<?php echo $art_i; ?>" class="art-first-cl art-accordion-item <?php echo ($art_i == 1) ? 'art-display-block':'art-display-none'; ?>">


                                    <?php for ($i = 1; $i <= 20; $i++): ?>

                                        <?php if($item['question_' . $i]) : ?>

                                            <button class="accordion art-heading-seven">
                                                <span class="service-name"><?php echo $item['question_' . $i]; ?></span>
                                            </button>
                                            <div class="panel">

                                                <div class="panel-data">
                                                    <?php echo $item['answer_' . $i]; ?>
                                                </div>

                                            </div>

                                        <?php endif; ?>

                                    <?php endfor; ?>


                                </div>
                                <?php $art_i++; ?>
                            <?php endforeach; ?>
                        </div>

                    </div>


        <?php endif; ?>
            </div>

        </div>

        <?php

    }

    protected function content_template()
    {
    }

    public function render_plain_content( $instance = [] )
    {
    }

}
?>
