<?php
namespace TMC_Elementor_Widgets;

use Elementor\Controls_Manager;
use Elementor\Widget_Base;
use Elementor\Group_Control_Typography;
use \Elementor\Group_Control_Border;
use \Elementor\Group_Control_Box_Shadow;

class Tmc_Status extends Widget_Base{
    public function get_name()
    {
      return 'tmc-status';
    }
    public function get_icon()
    {
        return 'eicon-code';
    }
    public function get_title()
    {
        return esc_html__('TMC Status', 'tmc');
    }

    public function get_categories()
    {
        return [ 'tmc-introduce-widgets' ];
    }
    protected function _register_controls()
    {
      // Tab Content
      $this->tmc_status_option();
    }
    private function tmc_status_option(){
      $this->start_controls_section(
        'tmc_status',
        [
            'label' => esc_html__('General', 'tmc')
        ]
      );

      /******/

      $this->add_control(
        'title_blocktime',
        [
          'type'        => Controls_Manager::TEXT,
          'label'       => __('Title', 'tmc' ),
          'default'     => __( '2s', 'tmc' ),
        ]
      );
      $this->add_control(
        'dec_blocktime',
        [
          'type'      => Controls_Manager::TEXT,
          'label'     => __( 'Content', 'tmc' ),
          'default'     => __( 'Blocktime', 'tmc' ),
        ]
      );

      /******/
      $this->add_control(
        'hr1',
        [
          'type' => Controls_Manager::DIVIDER,
        ]
      );
      /******/

      $this->add_control(
        'title_cost',
        [
          'type'        => Controls_Manager::TEXT,
          'label'       => __('Title', 'tmc' ),
          'default'     => __( '$0.0001', 'tmc' ),
        ]
      );
      $this->add_control(
        'dec_cost',
        [
          'label'     => __( 'Content', 'tmc' ),
          'type'      => Controls_Manager::TEXT,
          'default'     => __( 'Cost per transaction', 'tmc' ),
        ]
      );

      /******/
      $this->add_control(
        'hr2',
        [
          'type' => Controls_Manager::DIVIDER,
        ]
      );
      /******/

      $this->add_control(
        'dec_stated',
        [
          'type'        => Controls_Manager::TEXT,
          'label'       => __('Content', 'tmc' ),
          'default'     => __( 'Total TOMO staked', 'tmc' ),
        ]
      );

      /******/
      $this->add_control(
        'hr3',
        [
          'type' => Controls_Manager::DIVIDER,
        ]
      );
      /******/

      $this->add_control(
        'title_process',
        [
          'type'        => Controls_Manager::TEXT,
          'label'       => __('Title', 'tmc' ),
          'default'     => __( '$0.0001', 'tmc' ),
        ]
      );
      $this->add_control(
        'dec_process',
        [
          'label'     => __( 'Content', 'tmc' ),
          'type'      => Controls_Manager::TEXT,
          'default'     => __( 'Processing capability', 'tmc' ),
        ]
      );

      /******/
      $this->add_control(
        'hr4',
        [
          'type' => Controls_Manager::DIVIDER,
        ]
      );
      /******/

      $this->add_control(
        'dec_transactions',
        [
          'label'     => __( 'Content', 'tmc' ),
          'type'      => Controls_Manager::TEXT,
          'default'     => __( 'Total transactions', 'tmc' ),
        ]
      );

      /******/
      $this->add_control(
        'hr5',
        [
          'type' => Controls_Manager::DIVIDER,
        ]
      );
      /******/

      $this->add_control(
        'title_masternodes',
        [
          'type'        => Controls_Manager::TEXT,
          'label'       => __('Title', 'tmc' ),
          'default'     => __( '150', 'tmc' ),
        ]
      );
      $this->add_control(
        'dec_masternodes',
        [
          'label'     => __( 'Content', 'tmc' ),
          'type'      => Controls_Manager::TEXT,
          'default'     => __( 'No. masternodes', 'tmc' ),
        ]
      );

      /******/
      $this->add_control(
        'eael_section_dch_separator_alignment',
        [
          'label' => __('Alignment', 'essential-addons-for-elementor-lite'),
          'type' => \Elementor\Controls_Manager::CHOOSE,
          'options' => [
            'flex-start' => [
              'title' => __('Flex Start', 'essential-addons-for-elementor-lite'),
              'icon' => 'eicon-text-align-left',
            ],
            'center' => [
              'title' => __('Center', 'essential-addons-for-elementor-lite'),
              'icon' => 'eicon-text-align-center',
            ],
            'flex-end' => [
              'title' => __('Flex End', 'essential-addons-for-elementor-lite'),
              'icon' => 'eicon-text-align-right',
            ],
          ],
          'default' => 'center',
          'toggle' => true,
          'selectors' => [
            '{{WRAPPER}} .box-item' => 'text-align: {{VALUE}}',
          ],
        ]
      );

      $this->end_controls_section();
      

     /**
		 * -------------------------------------------
		 * Tab Style ( Dual Heading Style )
		 * -------------------------------------------
		 */
		$this->start_controls_section(
			'eael_section_dch_style_settings',
			[
				'label' => esc_html__('Dual Heading Style', 'essential-addons-for-elementor-lite'),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'eael_dch_bg_color',
			[
				'label' => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .box-item' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'eael_dch_container_padding',
			[
				'label' => esc_html__('Padding', 'essential-addons-for-elementor-lite'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .box-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'eael_dch_container_margin',
			[
				'label' => esc_html__('Margin', 'essential-addons-for-elementor-lite'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .box-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'eael_dch_border',
				'label' => esc_html__('Border', 'essential-addons-for-elementor-lite'),
				'selector' => '{{WRAPPER}} .box-item',
			]
		);

		$this->add_control(
			'eael_dch_border_radius',
			[
				'label' => esc_html__('Border Radius', 'essential-addons-for-elementor-lite'),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .box-item' => 'border-radius: {{SIZE}}px;',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'eael_dch_shadow',
				'selector' => '{{WRAPPER}} .box-item',
			]
		);

		$this->end_controls_section();
      
      // End 1

      $this->start_controls_section(
        'tmc_title_style',
        [
        'label' => esc_html__('Title', 'tmc'),
        'tab'   => Controls_Manager::TAB_STYLE,
        ]
      );
      $this->add_control(
        't_color',
        [
          'label'  => esc_html__('Color', 'tmc'),
          'type'   => Controls_Manager::COLOR,
          'selectors' => [
            '{{WRAPPER}} .text-title' => 'color: {{VALUE}}',
          ],
        ]
      );
      $this->add_group_control(
        Group_Control_Typography::get_type(),
        [
          'name' => 't_typography',
          'label' => esc_html__( 'Typography', 'tmc' ),
          'selector' => '{{WRAPPER}} .text-title',
        ]
      );
      $this->end_controls_section();
      // End 2

      $this->start_controls_section(
          'tmc_desc_style',
          [
          'label' => esc_html__('Description', 'tmc'),
          'tab'   => Controls_Manager::TAB_STYLE,
          ]
      );
      $this->add_control(
        'd_color',
        [
          'label'  => esc_html__('Color', 'tmc'),
          'type'   => Controls_Manager::COLOR,
          'selectors' => [
            '{{WRAPPER}} .text-dec' => 'color: {{VALUE}}',
          ],
        ]
      );
      $this->add_group_control(
        Group_Control_Typography::get_type(),
        [
          'name' => 'd_typography',
          'label' => esc_html__( 'Typography', 'tmc' ),
          'selector' => '{{WRAPPER}} .text-dec',
        ]
      );
      $this->end_controls_section();
      // End 3

    }
    protected function render()
    {
      $args = array(
        'timeout'     => 5,
        'redirection' => 5,
        'httpversion' => '1.0',
        'user-agent'  => 'WordPress/' . $wp_version . '; ' . home_url(),
        'blocking'    => true,
        'headers'     => array(),
        'cookies'     => array(),
        'body'        => null,
        'compress'    => false,
        'decompress'  => true,
        'sslverify'   => true,
        'stream'      => false,
        'filename'    => null
      );
      $staked = wp_remote_get( $url="https://tomoscan.io/api/account/0x0000000000000000000000000000000000000088", $args );
      $transaction = wp_remote_get( $url="https://tomoscan.io/api/transaction/list?offset=0&limit=1", $args );
      $dataStaked = json_decode( wp_remote_retrieve_body( $staked ), true );
      $dataTransaction = json_decode( wp_remote_retrieve_body( $transaction ), true );
      // echo '<pre>';
      //   echo number_format($dataStaked['balanceNumber'],5,",",".");
      //   echo '<br>';
      //   echo number_format($dataTransaction['total'],0,",",".");
      //   echo '<br>';
      //   echo $dataStaked['balanceNumber'];
      //   echo '<br>';
      //   echo $dataTransaction['total'];
      // echo '</pre>';
      $settings = $this->get_settings();
      ?>
      <div class="tmc-status-widget">
        <div class="d-flex flex-wrap">
          <div class="col-6 col-md-2 m-0 p-0">
            <div class="box-item h-100">
              <?php if(!empty($settings['dec_blocktime'])):?>
                <h3 class="text-title mb-2"><?php echo wp_kses_post($settings['title_blocktime']);?></h3>
                <div class="text-dec"><?php echo wp_kses_post($settings['dec_blocktime']);?></div>
              <?php endif;?>
            </div>
          </div>

          <div class="col-6 col-md-2 m-0 p-0"></div>
          <div class="col-6 d-md-none"></div>

          <div class="col-6 col-md-2 m-0 p-0">
            <div class="box-item h-100">
              <?php if(!empty($settings['dec_cost'])):?>
                <h3 class="text-title mb-2"><?php echo wp_kses_post($settings['title_cost']);?></h3>
                <div class="text-dec"><?php echo wp_kses_post($settings['dec_cost']);?></div>
              <?php endif;?>
            </div>
          </div>

          <div class="col-6 col-md-2 m-0 p-0 d-none d-md-block"></div>

          <div class="col-6 col-md-2 m-0 p-0">
            <div class="box-item h-100">
              <?php if(!empty($dataStaked['balanceNumber'])):?>
                <h3 class="text-title mb-2"><?php echo number_format($dataStaked['balanceNumber'],0,",",".");?></h3>
                <div class="text-dec"><?php echo wp_kses_post($settings['dec_stated']);?></div>
              <?php endif;?>
            </div>
          </div>

          <div class="col-6 col-md-2 m-0 p-0"></div>
          <div class="col-6 col-md-2 m-0 p-0"></div>

          <div class="col-6 col-md-2 m-0 p-0">
            <div class="box-item h-100">
              <?php if(!empty($settings['dec_process'])):?>
                <h3 class="text-title mb-2"><?php echo wp_kses_post($settings['title_process']);?></h3>
                <div class="text-dec"><?php echo wp_kses_post($settings['dec_process']);?></div>
              <?php endif;?>
            </div>
          </div>

          <div class="col-6 col-md-2 m-0 p-0 d-none d-md-block"></div>

          <div class="col-6 col-md-2 m-0 p-0">
            <div class="box-item h-100">
              <?php if(!empty($dataTransaction['total'])):?>
                <h3 class="text-title mb-2"><?php echo number_format($dataTransaction['total'],0,",",".");?></h3>
                <div class="text-dec"><?php echo wp_kses_post($settings['dec_transactions']);?></div>
              <?php endif;?>
            </div>
          </div>

          <div class="col-6 col-md-2 m-0 p-0"></div>
          <div class="col-6 d-md-none"></div>

          <div class="col-6 col-md-2 m-0 p-0">
            <div class="box-item h-100">
              <?php if(!empty($settings['dec_masternodes'])):?>
                <h3 class="text-title mb-2"><?php echo wp_kses_post($settings['title_masternodes']);?></h3>
                <div class="text-dec"><?php echo wp_kses_post($settings['dec_masternodes']);?></div>
              <?php endif;?>
            </div>
          </div>
        </div>

      </div>
      <?php
    }
}