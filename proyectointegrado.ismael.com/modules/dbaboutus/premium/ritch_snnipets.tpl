<script type="application/ld+json">
    {
        "@context" : "http://schema.org",
        "@type" : "Person",
        "name": "{$author.name|escape:'htmlall':'UTF-8'}",
        "URL": "{$url_author|escape:'htmlall':'UTF-8'}",
        "jobTitle": "{$author.profession|escape:'htmlall':'UTF-8'}",
        "email": "{$author.email|escape:'htmlall':'UTF-8'}",
        "description": "{$author.short_desc|strip_tags|escape:'htmlall':'UTF-8'}",
        "sameAs": [
            {if !empty($author.linkedin)}"{$author.linkedin|escape:'htmlall':'UTF-8'}",{/if}
            {if !empty($author.twitter)}"{$author.twitter|escape:'htmlall':'UTF-8'}",{/if}
            {if !empty($author.facebook)}"{$author.facebook|escape:'htmlall':'UTF-8'}",{/if}
            {if !empty($author.instagram)}"{$author.instagram|escape:'htmlall':'UTF-8'}",{/if}
            {if !empty($author.youtube)}"{$author.youtube|escape:'htmlall':'UTF-8'}",{/if}
            {if !empty($author.web)}"{$author.web|escape:'htmlall':'UTF-8'}"{/if}
        ],
  		"image": "{$path_img|escape:'htmlall':'UTF-8'}{$author.id_dbaboutus_author|escape:'htmlall':'UTF-8'}.jpg"
    }
</script>