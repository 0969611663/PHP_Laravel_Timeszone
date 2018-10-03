
<div class="main-content">

    <h1>Ứng dụng xem giờ hiện tại của các thành phố trên thế giới</h1>

    <label for="select-city"></label>

    <select id="select-city">

        <option>Chọn thành phố</option>

        <option value="America-Chihuahua">Chihuahua, Mexico</option>

        <option value="America-Costa_Rica">Costa Rica</option>

        <option value="America-Havana">La Habana, Cuba</option>

        <option value="Asia-Hong_Kong">Hồng Kông</option>

        <option value="Asia-Ho_Chi_Minh">Hồ Chí Minh, Việt Nam</option>

        <option value="America-Los_Angeles">Los Angeles, USA</option>

        <option value="America-New_York">New York, USA</option>

        <option value="Europe-Berlin">Berlin, Germany</option>

    </select>
    <script>
        document.getElementById("select-city").onchange = function () {

            ChooseCity()

        };

        function ChooseCity() {

            var time_zone = document.getElementById("select-city");

            window.location.href = time_zone.value;

        }

    </script>
</div>

