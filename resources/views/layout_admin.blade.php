<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
Thêm thư viện Chart.js từ CDN
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="css_admin/style.css">
</head>
<body>





@include('header_admin')
    <main>
    @yield('content')    
    </main>
    @include('footer_admin')



</body>
</html> -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<style>
        
    nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    text-align: center;
    }

    nav ul li {
    position: relative;
    
    }
    li.active {
    border: 1px solid #00bd55;
    background-color: #00bd56;
    border-radius: 20px;
    width: 25px;
    color: white
    }
    li.disabled{
    margin-left: 20px;
    margin-right: 20px;
    }
    nav ul li a {
    /* display: block; */
    color: black;
    text-decoration: none;
    padding: 1rem;
    
    }
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
</style>
<body>
    <div class="container-full " style="height: 100%;">
        <div class="row " style="height: 100%;">
        <div class="col-2 rounded-bottom-4 rounded-end-4 text-center bg-black" >>
        @include('header_admin')
       
       </div>
            <div class="col-9">
            @yield('content')    

            </div>
        </div>
        @include('footer_admin')
    
    </div>

   
    <script src="{{asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js')}}"></script>

    <script src="https://kit.fontawesome.com/99445db236.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
            $(document).ready(function() {
            $('#exampleModal1').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Nút kích hoạt modal
            var productId = button.data('product-id'); // Truy cập dữ liệu từ data-* attributes

            // Giả sử bạn có cách để lấy thông tin chi tiết sản phẩm từ id sản phẩm
            var productName = button.closest('tr').find('td:eq(1)').text();
            var productImg = button.closest('tr').find('td:eq(2)').find('img').attr('src');;
            var productQuantity = button.closest('tr').find('td:eq(4)').text();
            var productPrice = button.closest('tr').find('td:eq(5)').text().replace('đ', '').replace(/\./g, '');;
            var productCategory = button.closest('tr').find('td:eq(5)').find('input[type="hidden"]').val(); // Lấy giá trị danh mục

        // Debug logs
        console.log('Product ID:', productId);
            console.log('Product Name:', productName);
            console.log('Product Image:', productImg);
            console.log('Product Quantity:', productQuantity);
            console.log('Product Price:', productPrice);
            console.log('Product Category:', productCategory);

            // Cập nhật dữ liệu vào modal
            var modal = $(this);
            modal.find('#product-id').val(productId);
            modal.find('#product-name').val(productName);
            modal.find('#product-img').attr('src', productImg);
            modal.find('#product-quantity').val(productQuantity);
            modal.find('#product-price').val(productPrice);
            modal.find('#product-category').val(productCategory);
            modal.find('select[name="category_id"]').val(productCategory);
            $('#update-product-form').attr('action', '/spupdate/' + productId);
        });
        });
    </script>
    <script>
            $(document).ready(function() {
            $('#exampleModal2').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Nút kích hoạt modal
            var CategoryId = button.data('product-id'); // Truy cập dữ liệu từ data-* attributes

            // Giả sử bạn có cách để lấy thông tin chi tiết sản phẩm từ id sản phẩm
            var CategoryName = button.closest('tr').find('td:eq(1)').text();
          


        // Debug logs
        console.log('Category ID:', CategoryId);
            console.log('Category Name:', CategoryName);
         

            // Cập nhật dữ liệu vào modal
            var modal = $(this);
            modal.find('#Category-id').val(CategoryId);
            modal.find('#Category-name').val(CategoryName);
          
            $('#update-Category-form').attr('action', '/dmupdate/' + CategoryId);
        });
        });
    </script>

    <script>
    // Dữ liệu mẫu cho biểu đồ
    const salesData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
            label: 'Sales',
            data: [1000, 1500, 1200, 1800, 2000, 1700],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    };

    // Lấy thẻ canvas và vẽ biểu đồ doanh số
    const salesChartCanvas = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(salesChartCanvas, {
        type: 'line',
        data: salesData,
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>


</body>

</html>
