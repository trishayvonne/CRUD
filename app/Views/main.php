<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= base_url('save') ?>" method="post">
        <label><b>StudName:</b></label>
        <input type="hidden" name="ID" value="<?= $var['ID'] ?? ''?>">
        <input type="text" name="StudName" placeholder="Student Name" value="<?= $var['StudName'] ?? ''?>"><br>

        <label><b>StudGender:</b></label>
        <input type="text" name="StudGender" placeholder="Student Gender" value="<?= $var['StudGender'] ?? ''?>"><br>

        <label><b>StudCourse:</b></label>
        <input type="text" name="StudCourse" placeholder="Student Course" value="<?= $var['StudCourse'] ?? ''?>"><br>

        <label><b>StudSection:</b></label>
        <input type="text" name="StudSection" placeholder="Student Section" value="<?= $var['StudSection'] ?? '' ?>"><br>

        <label><b>StudYear:</b></label>
        <input type="text" name="StudYearLevel" placeholder="Student Year Level" value="<?= $var['StudYearLevel'] ?? '' ?>"><br>

        <input type="submit" value="save">

    </form>

    <h2>STUDENT INFORMATION</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Student Gender</th>
            <th>Student Course</th>
            <th>Student Section</th>
            <th>Student Year</th>
            <th>Actions</th>
        </tr>


        <?php foreach ($main as $mmodel): ?>
            
                <td><?= $mmodel['ID'] ?></td><br>
                <td><?= $mmodel['StudName'] ?></td><br>
                <td><?= $mmodel['StudGender'] ?></td><br>
                <td><?= $mmodel['StudCourse'] ?></td><br>
                <td><?= $mmodel['StudSection'] ?></td><br>
                <td><?= $mmodel['StudYearLevel'] ?></td><br>
                <td><a href="/Update/<?= $mmodel['ID'] ?>">Update</a>
                    <a href="/Delete/<?= $mmodel['ID'] ?>">Delete</a>
                </td>
       
        <?php endforeach; ?>
       
    </table>
</body>
</html>