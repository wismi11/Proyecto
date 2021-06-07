<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<h1>{$title}</h1>

<style type="text/css">
h1 {
    color: #404040;
    text-align: left;
    margin-top: 47px !important;
    margin-left: 56px;
    font-size: 50px;
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
</style>

{include file="$pagination_templates"}

{if $pagination}
    <div class="list-group">
        {foreach from=$filtered_list item=glossary}
            <div class="list-group-item">
                <p class="list-group-item-heading"><b>{$glossary.name}</b></p>

                <p class="list-group-item-text">{$glossary.description}</p>
            </div>
        {/foreach}
    </div>
{/if}
