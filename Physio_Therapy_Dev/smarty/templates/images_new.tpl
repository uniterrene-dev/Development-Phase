
{include file='header.tpl'}
{include file='tab.tpl'}

            <table id="example" class="table table-bordered table-hover table-striped">
              <thead>
                <tr>
                  {foreach item=col_name  from=$img_data.cols }
                    <th class="header"> {$col_name}</th>
                  {/foreach}
                </tr>
              </thead>
              <tbody>
              {foreach item=row from=$img_data.data}
              <tr>
                {foreach key=db_col item=col_name  from=$img_data.cols }
                  {if $db_col eq 'user_id'}
                    <td> <a href="#" onClick="populateForm({$row['user_id']}, '{$row['user_name']}', '{$row['email']}', '{$row['phone']}', '{$row['first_name']}', '{$row['last_name']}', '{$row['active']}', '{$row['role']}');"> {$row.$db_col} </a> </td>
                  {elseif $db_col eq 'active'}
                    {if $row.$db_col == 1}
                    <td> Active </td>
                    {else}
                    <td> Inactive </td>
                    {/if}
                  {else}
                    <td>{$row[$db_col]}</td>
                  {/if}
                {/foreach}
                <td><a href="#" onClick="deleteUser({$row['user_id']});"><i class="fa fa-trash-o"></i></a></td>
              </tr>
              {/foreach}
              </tbody>
            </table>



{include file='footer.tpl'}
