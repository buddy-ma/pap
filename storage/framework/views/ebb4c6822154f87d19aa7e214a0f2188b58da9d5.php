		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

		<!-- Jquery js-->
		<script src="<?php echo e(URL::asset('admin_assets/js/jquery-3.5.1.min.js')); ?>"></script>

		<!-- Bootstrap4 js-->
		<script src="<?php echo e(URL::asset('admin_assets/plugins/bootstrap/popper.min.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('admin_assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>

		<!--Othercharts js-->
		<script src="<?php echo e(URL::asset('admin_assets/plugins/othercharts/jquery.sparkline.min.js')); ?>"></script>

		<!-- Circle-progress js-->
		<script src="<?php echo e(URL::asset('admin_assets/js/circle-progress.min.js')); ?>"></script>

		<!-- Jquery-rating js-->
		<script src="<?php echo e(URL::asset('admin_assets/plugins/rating/jquery.rating-stars.js')); ?>"></script>

		<!--Sidemenu js-->
		<script src="<?php echo e(URL::asset('admin_assets/plugins/sidemenu/sidemenu.js')); ?>"></script>

		<!-- P-scroll js-->
		<script src="<?php echo e(URL::asset('admin_assets/plugins/p-scrollbar/p-scrollbar.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('admin_assets/plugins/p-scrollbar/p-scroll1.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('admin_assets/plugins/p-scrollbar/p-scroll.js')); ?>"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script>
			$(document).ready(function() {
				var msg='<?php echo e(Session::get('alert')); ?>';
				if(msg=='verified')
					$('#modaldemo4').modal("show");
				else
					$("#modaldemo4").modal("hide");
			});
		</script>
		<script>
			window.addEventListener('nottif', event => {
				const Toast = Swal.mixin({
					toast: true,
					position: 'top-end',
					showConfirmButton: false,
					timer: 3000,
					timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener('mouseenter', Swal.stopTimer)
						toast.addEventListener('mouseleave', Swal.resumeTimer)
					}
				});

				Toast.fire({
					icon: event.detail.type,
					title: event.detail.message,
				});
			}
		</script>
		<script>
			window.addEventListener('swal:modal', event => {
				new swal({
					title: event.detail.message,
					icon: event.detail.type,
				});
			});
		</script>
		<?php echo $__env->yieldContent('js'); ?>
		<!-- Simplebar JS -->
		<script src="<?php echo e(URL::asset('admin_assets/plugins/simplebar/js/simplebar.min.js')); ?>"></script>
		<!-- Custom js-->
		<script src="<?php echo e(URL::asset('admin_assets/js/custom.js')); ?>"></script>
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio - soukaina\resources\views/admin/layouts/footer-scripts.blade.php ENDPATH**/ ?>