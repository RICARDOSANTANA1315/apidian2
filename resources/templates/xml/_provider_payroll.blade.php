<ProveedorXML
    RazonSocial="{{preg_replace("/[\r\n|\n|\r]+/", "", $user->name)}}"
    @if(count($splited_name) == 2)
        PrimerNombre="{{preg_replace("/[\r\n|\n|\r]+/", "", $splited_name[0])}}"
        PrimerApellido="{{preg_replace("/[\r\n|\n|\r]+/", "", $splited_name[1])}}"
    @endif
    @if(count($splited_name) == 3)
        PrimerNombre="{{preg_replace("/[\r\n|\n|\r]+/", "", $splited_name[0])}}"
        PrimerApellido="{{preg_replace("/[\r\n|\n|\r]+/", "", $splited_name[1])}}"
        SegundoApellido="{{preg_replace("/[\r\n|\n|\r]+/", "", $splited_name[2])}}"
    @endif
    @if(count($splited_name) > 3)
        PrimerNombre="{{preg_replace("/[\r\n|\n|\r]+/", "", $splited_name[0])}}"
        PrimerApellido="{{preg_replace("/[\r\n|\n|\r]+/", "", $splited_name[2])}}"
        SegundoApellido="{{preg_replace("/[\r\n|\n|\r]+/", "", $splited_name[3])}}"
        OtrosNombres="{{preg_replace("/[\r\n|\n|\r]+/", "", $splited_name[1])}}"
    @endif
    NIT="{{preg_replace("/[\r\n|\n|\r]+/", "", $company->identification_number)}}"
    DV="{{preg_replace("/[\r\n|\n|\r]+/", "", $company->dv)}}"
    SoftwareID="{{preg_replace("/[\r\n|\n|\r]+/", "", $company->software->identifier_payroll)}}"
    SoftwareSC="====SoftwareSecurityCode===="></ProveedorXML>
<CodigoQR>{{$QRCode}}</CodigoQR>
