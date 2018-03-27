
<form action="menu.php" method="POST">
    Thuc don <br>
    Mon khai vi:
    <select name="mon_khai_vi[]" size="4" multiple="multiple">
            <option value="Goi ngo sen">Goi ngo sen </option>
            <option value="Salat ca ngu">Salat ca ngu </option>
            <option value="Bo tron rau thom">Bo tron rau thom </option>
            <option value="Thit nguoi">Thit nguoi </option>
        </select>
    Mon chinh:
    <select name="mon_chinh[]" size="4" multiple="multiple">
            <option value="Bo ham">Bo ham </option>
            <option value="Ca chem sot ca">Ca chem sot ca </option>
            <option value="Tom rang muoi">Tom rang muoi </option>
            <option value="Cua sot me">Cua sot me </option>
        </select>
    Mon trang mieng:
    <select name="mon_trang_mieng[]" size="4" multiple="multiple">
            <option value="Che hat sen">Che hat sen </option>
            <option value="Banh flan">Banh flan </option>
            <option value="Rau cau">Rau cau </option>
        </select>
    <button type="submit" value="submit"> Submit </button>
</form>