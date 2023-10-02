<link href="<?php echo ROOT_URL; ?>/Engine/API/Exercises/Collection/Style.css" rel="stylesheet" />

<?php if($collection->count()): ?>
    <div id="exercises-collection">
        <table>
            <tr>
                <td>Exercise</td>
                <td>Mark</td>
                <td style="text-align: right;">Actions</td>
            </tr>
            <?php foreach($collection as $entity): ?>
                <tr>
                    <td>
                        <?php echo $entity->getTask(); ?>
                    </td>
                    <td>
                        <?php echo $entity->getMark(); ?>
                    </td>
                    <td style="text-align: right;">
                        <a href="javascript:void(0)" onclick="Bionic.Lessons.edit('<?php echo $entity->getKey(); ?>');">Edit</a> &diams;
                        <a href="javascript:void(0)" onclick="Bionic.Lessons.remove('<?php echo $entity->getKey(); ?>');">Remove</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?php endif; ?>