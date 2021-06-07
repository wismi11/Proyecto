<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style type="text/css">
body {
    background-color:#f6f6f6;
}

a {
    color: #404040;
    text-decoration: none;
    background-color: transparent;
}
.list-group-item {
    z-index: 2;
    color: black;
    width: auto;
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: rgb(255 113 0 / 43%);
    border-color: rgb(255 113 0 / 43%);
    width: auto;
}
.list-group {
    display: -ms-flexbox;
    display: block;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 50px;
    padding-right: 60px;
    margin-bottom: 0;
}
.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: .25rem;
    border-bottom-left-radius: .25rem;
    width: auto;
}
</style>


{if $alphabet|@count}
    <div class="list-group">
        <ul class="pagination">
            {if $pagination }
                {foreach from=$alphabet item=char}
                    {if $char == $current}
                        <li class="active list-group-item list-group-item-action"><a href="#" title="{$char}">{$char}</a></li>
                    {else}
                        <li class="list-group-item list-group-item-action"><a href="{$link->getModuleLink('diccionario', 'diccipage')}?k={$char}" title="{$char}">{$char}</a></li>
                    {/if}
                {/foreach}
            {else}
                {foreach from=$alphabet item=char}
                    <li class="list-group-item list-group-item-action"><a href="#k_{$char}" title="{$char}">{$char}</a></li>
                {/foreach}
            {/if}
        </ul>
    </div>
{/if}