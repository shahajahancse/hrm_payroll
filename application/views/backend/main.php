<div class="d-flex flex-column flex-root">
	<!--begin::Page-->
	<div class="d-flex flex-row flex-column-fluid page">


		<!--begin::Aside / left menu-->
		<?php echo $this->load->view('backend/main/aside'); ?>
		<!--end::Aside-->



		<!--begin::Wrapper-->
		<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

			<!--begin::Header-->
			<?php echo $this->load->view('backend/main/header'); ?>
			<!--end::Header-->


			<!--begin::Content-->
			<?php echo $this->load->view('backend/main/content'); ?>
			<!--end::Content-->


			<!--begin::Footer-->
			<?php echo $this->load->view('backend/main/footer_nav'); ?>
			<!--end::Footer-->


		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Page-->
</div>

<!-- begin:Modal -->
<?php echo $this->load->view('backend/main/modal'); ?>
<!-- end Modal -->