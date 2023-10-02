<link href="<?php echo ROOT_URL; ?>/Engine/API/Exercises/Edit/Style.css" rel="stylesheet" />

<div id="exercises-edit">
    <a href="javascript:void(0)" onclick="Bionic.Lessons.save('<?php echo $entity->getKey(); ?>');">Save</a>
    <a href="javascript:void(0)" onclick="Bionic.Lessons.getCollection($('#page'));">Cancel</a>
    <hr/>
    <table>
        <tr><td style="width: 10%;">Task</td><td><input type="text" name="task" value="<?php echo $entity->getTask(); ?>" /></td></tr>
        <tr><td style="width: 10%;">Mark</td><td><input type="text" name="mark" value="<?php echo $entity->getMark(); ?>" />%</td></tr>
        <tr><td style="width: 10%;">Timestamp</td><td><input type="text" name="dt" value="<?php echo $entity->getDt(); ?>" /></td></tr>
    </table>
    <hr/>
    <a href="javascript:void(0)" onclick="Bionic.Lessons.save('<?php echo $entity->getKey(); ?>');">Save</a>
    <a href="javascript:void(0)" onclick="Bionic.Lessons.getCollection($('#page'));">Cancel</a>
</div>