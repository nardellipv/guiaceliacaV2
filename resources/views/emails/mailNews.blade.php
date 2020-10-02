<p>&nbsp;</p>
<table style="background-color: #d8d8d8; margin-left: auto; margin-right: auto;" width="70%">
    <tbody>
        <tr style="height: 72px;">
            <td style="width: 596px; height: 72px; text-align: center;">
                <h1><span style="color: #999999;"><strong>GuiaCelica</strong></span></h1>
            </td>
        </tr>
        <tr style="height: 72px;">
            <td style="width: 596px; height: 72px; text-align: center;"><strong>Hola,&nbsp;</strong></td>
        </tr>
        <tr style="height: 161px;">
            <td style="width: 596px; height: 161px;">
                <h4 style="text-align: center;">Te traemos un resumen de las &uacute;ltimas noticias publicadas en
                    nuestro sitio</h4>
                    <hr />
                @foreach ($sendPost as $post)
                    <p style="text-align: center;"><strong>{!! $post->title !!}</strong></p>
                    <p style="text-align: center;"><em>{!! Str::limit($post->body, 200) !!}</em></p>
                    <p style="font-size: 14px; line-height: 21px; margin: 0; text-align: center;"><strong><a
                        href="https://www.guiaceliaca.com.ar/blog/{{ $post->slug }}"
                        style="text-decoration: underline; color: #a17c44;"
                        target="_blank">Leer noticia completa</a></strong></p>
                    <hr />
                @endforeach
            </td>
        </tr>
        <tr style="height: 31px;">
            <td style="width: 596px; height: 31px; text-align: center;">
                <p><a style="-webkit-text-size-adjust: none; text-decoration: none; display: inline-block; color: #ffffff; background-color: #3aaee0; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; width: auto; padding-top: 5px; padding-bottom: 5px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; text-align: center; mso-border-alt: none; word-break: keep-all; border: 1px solid #3AAEE0;"
                        title="Gu&iacute;a Cel&iacute;aca" href="https://guiaceliaca.com.ar" target="_blank"
                        rel="noopener"><span
                            style="padding-left: 20px; padding-right: 20px; font-size: 16px; display: inline-block;"><span
                                style="font-size: 16px; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;">Ir
                                a guiaceliaca.com.ar</span></span></a></p>
                <p><sub>El equipo de GuiaCeliaca quiere agradecerte por participar de nuestra comunidad. Esperamos
                        seguir viendote y participando activamente.</sub></p>
            </td>
        </tr>
        <tr style="height: 31px;">
            <td style="width: 596px; height: 31px; text-align: right;">&nbsp;<a
                    href="https://www.facebook.com/guiaceliaca"><img
                        src="https://guiaceliaca.com.ar/styleWeb/imagesmail/facebook2x.png" alt="" width="26"
                        height="26" /></a>&nbsp;&nbsp;&nbsp;<a href="https://www.instagram.com/guiaceliaca"><img
                        src="https://guiaceliaca.com.ar/styleWeb/imagesmail/instagram2x.png" alt="" width="24"
                        height="24" /></a></td>
        </tr>
        <tr style="height: 31px;">
            <td style="width: 596px; height: 31px; text-align: center;"><span style="color: #ff0000;"><em><sub>Este
                            email es generado autom&aacute;ticamente, por favor no respondas</sub></em></span>
            </td>
        </tr>
    </tbody>
</table>
