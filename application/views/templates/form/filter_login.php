    <form action="">
        <div class="row mb-2">
            <div class="col-2">
                <?php
                $form = array(
                    'name' => 'date',
                    'id' => 'date',
                    'class' => 'form-control',
                );
                $attr = $form_data['date'];
                $form['options'] = $attr['options'];
                // $form['selected'] = $attr['selected'];
                echo '<label for="" class="control-label">' . $attr["label"] . '</label>';
                echo form_dropdown($form);
                ?>
            </div>
            <div class="col-2">
                <?php
                $form = array(
                    'name' => 'month',
                    'id' => 'month',
                    'class' => 'form-control',
                );
                $attr = $form_data['month'];
                $form['options'] = $attr['options'];
                $form['selected'] = $attr['selected'];
                echo '<label for="" class="control-label">' . $attr["label"] . '</label>';
                echo form_dropdown($form);
                ?>
            </div>
            <div class="col-4">
                <?php
                $form = array(
                    'name' => 'opd',
                    'id' => 'opd',
                    'class' => 'form-control',
                );
                $attr = $form_data['opd'];
                $form['options'] = $attr['options'];
                $form['selected'] = $attr['selected'];
                echo '<label for="" class="control-label">' . $attr["label"] . '</label>';
                echo form_dropdown($form);
                ?>
                <input type="hidden" name="group_by" value="date">
            </div>
            <div class="col-4" style="margin-top:32px">
                <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" style="margin-left: 5px;">
                    Filter
                </button>
            </div>
        </div>
    </form>
    <!-- - -->