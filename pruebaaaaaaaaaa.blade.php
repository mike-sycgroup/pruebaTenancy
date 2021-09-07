<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<nav id="sidebarMenu" class="col-12 col-md-3 col-lg-2 d-md-block pb-5  sidebar collapse scrollarea">
      <div class="accordion menuTop bg-white" id="accordionExample">
        <h6 class="sidebar-heading  px-3 mt-3 mb-3 text-muted">
          <span>Seguridad</span>
        </h6>
        <ul class="nav flex-column">
          <li class="accordion-item  mb-1">
            <div class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#actions-collapse" aria-expanded="true" aria-controls="actions-collapse">
                <i class="fas fa-chalkboard-teacher mr-2"></i>
                Acciones
              </button>
            </div>
            <div class=" collapse show" id="actions-collapse" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav pb-1 accordion-body">
                <div>
                  <a routerLink="actions/create" class=" d-md-none " data-bs-toggle="collapse"
                    data-bs-target="#sidebarMenu" aria-bs-controls="sidebarMenu" aria-bs-expanded="false">Crear
                    Acción</a>
                  <a routerLink="actions/create" class="smNone">Crear
                    Acción</a>
                </div>
                <div>
                  <a routerLink="actions" class=" ">Ver Acciones</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="permisosOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#permisos-collapse"
                aria-expanded="true" aria-controls="permisos-collapse">
                <i class="fas fa-check-double mr-2"></i>
                Permisos
              </button>
            </div>
            <div class="collapse " id="permisos-collapse" aria-labelledby="permisosOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav  pb-1 accordion-body">
                <div>
                  <a routerLink="permissions/create" class=" ">Crear Permisos</a>
                </div>
                <div>
                  <a routerLink="permissions" class=" ">Ver Permisos</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="rolesOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#roles-collapse"
                aria-expanded="true" aria-controls="roles-collapse">
                <i class="fas fa-user-tag mr-2"></i>
                Roles
              </button>
            </div>
            <div class="collapse" id="roles-collapse" aria-labelledby="rolesOne" data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav pb-1 accordion-body">
                <div>
                  <a routerLink="roles/create" class="">Crear Rol</a>
                </div>
                <div>
                  <a routerLink="roles" class="">Ver Roles</a>
                </div>
              </ul>
            </div>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between px-3 mt-3 mb-1 text-muted">
          <span>Banca</span>
        </h6>
        <ul class="nav flex-column">
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="accountBankOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accountBank-collapse"
                aria-expanded="true" aria-controls="accountBank-collapse">
                <i class="fas fa-credit-card mr-2"></i>
                Cuentas Bancarias
              </button>
            </div>
            <div class="collapse" id="accountBank-collapse" aria-labelledby="accountBankOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="BankAccount/create" class="">Crear Cuenta Bancaria</a>
                </div>
                <div>
                  <a routerLink="BankAccount" class="">Ver Cuentas Bancarias</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="transferenceBankOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#transferenceBank-collapse"
                aria-expanded="true" aria-controls="transferenceBank-collapse">
                <i class="fas fa-money-check mr-2"></i>
                Movimientos Bancarios
              </button>
            </div>
            <div class="collapse " id="transferenceBank-collapse" aria-labelledby="transferenceBankOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="BankTransactions" class=" ">Ver Movimientos Bancarios</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="BankOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#bank-collapse"
                aria-expanded="true" aria-controls="bank-collapse">
                <i class="fas fa-university mr-2"></i>
                Bancos
              </button>
            </div>
            <div class="collapse " id="bank-collapse" aria-labelledby="BankOne" data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1 ">
                <div>
                  <a routerLink="bank/create" class="">Crear Banco</a>
                </div>
                <div>
                  <a routerLink="bank" class="">Ver Bancos</a>
                </div>
              </ul>
            </div>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between px-3 mt-3 mb-1 text-muted">
          <span>Xisfopay</span>
        </h6>
        <ul class="nav flex-column">
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="amountGirosOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#amountGiros-collapse"
                aria-expanded="true" aria-controls="amountGiros-collapse">
                <i class="fas fa-hand-holding-usd mr-2"></i>
                Montos Giros
              </button>
            </div>
            <div class="collapse " id="amountGiros-collapse" aria-labelledby="amountGirosOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1 ">
                <div>
                  <a routerLink="AmountGiros" class="">Ver Montos Giros</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="trmGirosOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#trmGiros-collapse"
                aria-expanded="true" aria-controls="trmGiros-collapse">
                <i class="fas fa-funnel-dollar mr-2"></i>
                TRM Giros
              </button>
            </div>
            <div class="collapse" id="trmGiros-collapse" aria-labelledby="trmGirosOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="TRM/create" class="">Crear TRM</a>
                </div>
                <div>
                  <a routerLink="TRM" class="">Ver TRM</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="GirosOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#giros-collapse"
                aria-expanded="true" aria-controls="giros-collapse">
                <i class="fas fa-funnel-dollar mr-2"></i>
                Giros
              </button>
            </div>
            <div class="collapse" id="giros-collapse" aria-labelledby="GirosOne" data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="giros/create" class="">Crear Giro</a>
                </div>
                <div>
                  <a routerLink="giros" class="">Ver Giros</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="contractFeeOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#contractFee-collapse"
                aria-expanded="true" aria-controls="contractFee-collapse">
                <i class="fas fa-percent mr-2"></i>
                Tarifas de Contrato
              </button>
            </div>
            <div class="collapse" id="contractFee-collapse" aria-labelledby="contractFeeOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="ContractFee/create" class="">Crear Tarifa de Contrato</a>
                </div>
                <div>
                  <a routerLink="ContractFee" class="">Ver Tarifas de Contrato</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="contractRenewalOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#contractRenewal-collapse"
                aria-expanded="true" aria-controls="contractRenewal-collapse">
                <i class="fas fa-file-signature mr-2"></i>
                Renovaciones de Contrato
              </button>
            </div>
            <div class="collapse" id="contractRenewal-collapse" aria-labelledby="contractRenewalOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="ContractRenewals" class="">Ver Renovaciones</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="contractRequestStateOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#contractRequestState-collapse"
                aria-expanded="true" aria-controls="contractRequestState-collapse">
                <i class="fas fa-arrow-alt-circle-right mr-2"></i>
                Estados de Solicitud de Contrato
              </button>
            </div>
            <div class="collapse " id="contractRequestState-collapse" aria-labelledby="contractRequestStateOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="ContractRequestState/create" class="">Crear Estado de Solicitud Contrato</a>
                </div>
                <div>
                  <a routerLink="ContractRequestState" class="">Ver Estados de Solicitud Contrato</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="streamingAccountOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#streamingAccount-collapse"
                aria-expanded="true" aria-controls="streamingAccount-collapse">
                <i class="fas fa-satellite-dish mr-2"></i>
                Cuentas Streaming Clientes
              </button>
            </div>
            <div class="collapse" id="streamingAccount-collapse" aria-labelledby="streamingAccountOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="StreamingAccount/create" class="">Crear Cuenta</a>
                </div>
                <div>
                  <a routerLink="StreamingAccount" class="">Ver Cuentas</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="contractRequestOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#contractRequest-collapse"
                aria-expanded="true" aria-controls="contractRequest-collapse">
                <i class="fas fa-reply-all mr-2"></i>
                Solicitudes de Contrato
              </button>
            </div>
            <div class="collapse" id="contractRequest-collapse" aria-labelledby="contractRequestOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="ContractRequets/create" class="">Crear Solicitud de Contrato</a>
                </div>
                <div>
                  <a routerLink="ContractRequets" class="">Ver Solicitudes de Contrato</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="contractStateOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#contractState-collapse"
                aria-expanded="true" aria-controls="contractState-collapse">
                <i class="fas fa-satellite-dish mr-2"></i>
                Estados de Contrato
              </button>
            </div>
            <div class="collapse" id="contractState-collapse" aria-labelledby="contractStateOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="ContractState/create" class="">Crear Estados Contrato</a>
                </div>
                <div>
                  <a routerLink="ContractState" class="">Ver Estados Contrato</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="contractOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#contract-collapse"
                aria-expanded="true" aria-controls="contract-collapse">
                <i class="fas fa-file-signature mr-2"></i>
                Contratos
              </button>
            </div>
            <div class="collapse" id="contract-collapse" aria-labelledby="contractOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="contract" class="">Ver Contratos</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="advancesOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#advances-collapse"
                aria-expanded="true" aria-controls="advances-collapse">
                <i class="fas fa-file-invoice-dollar mr-2"></i>
                Prestamos
              </button>
            </div>
            <div class="collapse" id="advances-collapse" aria-labelledby="advancesOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="advance" class="">Ver Prestamos</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="transferenceBanckOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#transferenceBank-collapse"
                aria-expanded="true" aria-controls="advances-collapse">
                <i class="fas fa-cut mr-2"></i>
                Transferencias Bancarias
              </button>
            </div>
            <div class="collapse" id="transferenceBank-collapse" aria-labelledby="transferenceBanckOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="transference" class="">Ver Transferencias</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="paymentCutsOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#paymentCuts-collapse"
                aria-expanded="true" aria-controls="paymentCuts-collapse">
                <i class="fas fa-cut mr-2"></i>
                Cortes de Pagos
              </button>
            </div>
            <div class="collapse" id="paymentCuts-collapse" aria-labelledby="paymentCutsOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="PaymentCuts/create" class="">Crear Corte</a>
                </div>
                <div>
                  <a routerLink="PaymentCuts" class="">Ver Cortes</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="paymentRequestStateOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#paymentRequestState-collapse"
                aria-expanded="true" aria-controls="paymentRequestState-collapse">
                <i class="fas fa-toggle-on mr-2"></i>
                Estados de Solicitud de Pago
              </button>
            </div>
            <div class="collapse" id="paymentRequestState-collapse" aria-labelledby="paymentRequestStateOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="PaymentRequetsState/create" class="">Crear Estado Pago</a>
                </div>
                <div>
                  <a routerLink="PaymentRequetsState" class="">Ver Estados Pago</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="paymentRequestOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#paymentRequest-collapse"
                aria-expanded="true" aria-controls="paymentRequest-collapse">
                <i class="fas fa-file-invoice-dollar mr-2"></i>
                Solicitud de Pago
              </button>
            </div>
            <div class="collapse " id="paymentRequest-collapse" aria-labelledby="paymentRequestOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="PaymentRequets/create" class="">Crear Solicitud Pago</a>
                </div>
                <div>
                  <a routerLink="PaymentRequets" class="">Ver Solicitud Pago</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="customerCommissionOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#customerCommission-collapse"
                aria-expanded="true" aria-controls="customerCommission-collapse">
                <i class="fas fa-money-bill-wave mr-2"></i>
                Comisiones Plataformas Cliente
              </button>
            </div>
            <div class="collapse" id="customerCommission-collapse" aria-labelledby="customerCommissionOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="CustomerCommission/create" class="">Crear Comisión Plataforma</a>
                </div>
                <div>
                  <a routerLink="CustomerCommission" class="">Ver Comisión Plataforma</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="servicesXisfoOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#servicesXisfo-collapse"
                aria-expanded="true" aria-controls="customerCommission-collapse">
                <i class="fas fa-file-invoice-dollar mr-2"></i>
                Servicios Xisfo
              </button>
            </div>
            <div class="collapse" id="servicesXisfo-collapse" aria-labelledby="servicesXisfoOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="ServicesXisfo/create" class="">Crear Servicio</a>
                </div>
                <div>
                  <a routerLink="ServicesXisfo" class="">Ver Servicios</a>
                </div>
              </ul>
            </div>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between px-3 mt-3 mb-1 text-muted">
          <span>Administrativos</span>
        </h6>
        <ul class="nav flex-column">
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="corporatePhoneOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#corporatePhone-collapse"
                aria-expanded="true" aria-controls="corporatePhone-collapse">
                <i class="fas fa-phone mr-2"></i>
                Teléfonos Corporativos
              </button>
            </div>
            <div class="collapse" id="corporatePhone-collapse" aria-labelledby="corporatePhoneOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="CorporatePhone/create" class="">Crear Teléfonos Corporativos</a>
                </div>
                <div>
                  <a routerLink="CorporatePhone" class="">Ver Teléfonos Corporativos</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="citiesOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#cities-collapse"
                aria-expanded="true" aria-controls="cities-collapse">
                <i class="fas fa-city mr-2"></i>
                Cuidades
              </button>
            </div>
            <div class="collapse" id="cities-collapse" aria-labelledby="citiesOne" data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="cities" class="">Ver Ciudades</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="employeesOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#employees-collapse"
                aria-expanded="true" aria-controls="employees-collapse">
                <i class="fas fa-user-tie mr-2"></i>
                Empleados
              </button>
            </div>
            <div class="collapse" id="employees-collapse" aria-labelledby="employeesOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="employees/create" class="">Crear Empleado</a>
                </div>
                <div>
                  <a routerLink="employees" class="">Ver Empleados</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="employeesProfileOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#employeesProfile-collapse"
                aria-expanded="true" aria-controls="employeesProfile-collapse">
                <i class="fas fa-user-tie mr-2"></i>
                Perfiles Empleados
              </button>
            </div>
            <div class="collapse " id="employeesProfile-collapse" aria-labelledby="employeesProfileOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="EmployeesProfile" class="">Ver Perfil Empleado</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="interviewStateOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#interviewState-collapse"
                aria-expanded="true" aria-controls="interviewState-collapse">
                <i class="fas fa-vote-yea mr-2"></i>
                Estados Entrevistas
              </button>
            </div>
            <div class="collapse" id="interviewState-collapse" aria-labelledby="interviewStateOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="InterviewState/create" class="">Crear Estado Entrevista</a>
                </div>
                <div>
                  <a routerLink="InterviewState" class="">Ver Estados Entrevistas</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="interviewOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#interview-collapse"
                aria-expanded="true" aria-controls="interview-collapse">
                <i class="fas fa-address-card mr-2"></i>
                Entrevistas
              </button>
            </div>
            <div class="collapse" id="interview-collapse" aria-labelledby="interviewOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="interview/create" class="">Crear Entrevista</a>
                </div>
                <div>
                  <a routerLink="interview" class="">Ver Entrevista</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="kpisOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#kpis-collapse"
                aria-expanded="true" aria-controls="kpis-collapse">
                <i class="fas fa-chart-line mr-2"></i>
                Kpis
              </button>
            </div>
            <div class="collapse" id="kpis-collapse" aria-labelledby="kpisOne" data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="kpis/create" class="">Crear Kpis</a>
                </div>
                <div>
                  <a routerLink="kpis" class="">Ver Kpis</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="sucursalOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#sucursal-collapse"
                aria-expanded="true" aria-controls="kpis-collapse">
                <i class="fas fa-map-marker mr-2"></i>
                Sucursales
              </button>
            </div>
            <div class="collapse" id="sucursal-collapse" aria-labelledby="sucursalOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="sucursal/create" class="">Crear Sucursal</a>
                </div>
                <div>
                  <a routerLink="sucursal" class="">Ver Sucursales</a>
                </div>
              </ul>
            </div>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between px-3 mt-3 mb-1 text-muted">
          <span>Clientes</span>
        </h6>
        <ul class="nav flex-column">
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="bankAccountCustomerOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#bankAccountCustomer-collapse"
                aria-expanded="true" aria-controls="bankAccountCustomer-collapse">
                <i class="fas fa-file-invoice-dollar mr-2"></i>
                Cuentas Bancos Clientes
              </button>
            </div>
            <div class="collapse" id="bankAccountCustomer-collapse" aria-labelledby="bankAccountCustomerOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="BankAccountCustomer/create" class="">Crear Cuenta</a>
                </div>
                <div>
                  <a routerLink="BankAccountCustomer" class="">Ver Cuentas</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="companyCustomerOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#companyCustomer-collapse"
                aria-expanded="true" aria-controls="companyCustomer-collapse">
                <i class="fas fa-file-invoice-dollar mr-2"></i>
                Empresas Clientes
              </button>
            </div>
            <div class="collapse" id="companyCustomer-collapse" aria-labelledby="companyCustomerOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="CompanyCustomer/create" class="">Crear Empresa Cliente</a>
                </div>
                <div>
                  <a routerLink="CompanyCustomer" class="">Ver Empresas Clientes</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="customerStateOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#customerState-collapse"
                aria-expanded="true" aria-controls="customerState-collapse">
                <i class="fas fa-heart mr-2"></i>
                Estados Clientes
              </button>
            </div>
            <div class="collapse" id="customerState-collapse" aria-labelledby="customerStateOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="CustomerState/create" class="">Crear Estado Cliente</a>
                </div>
                <div>
                  <a routerLink="CustomerState" class="">Ver Estados Cliente</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="customerOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#customer-collapse"
                aria-expanded="true" aria-controls="customer-collapse">
                <i class="fas fa-headphones mr-2"></i>
                Clientes
              </button>
            </div>
            <div class="collapse" id="customer-collapse" aria-labelledby="customerOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="customer/create" class="">Crear Cliente</a>
                </div>
                <div>
                  <a routerLink="customer" class="">Ver Clientes</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="leadsStateOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#leadsState-collapse"
                aria-expanded="true" aria-controls="leadsState-collapse">
                <i class="fas fa-satellite-dish mr-2"></i>
                Estados Leads
              </button>
            </div>
            <div class="collapse" id="leadsState-collapse" aria-labelledby="leadsStateOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="LeadsState/create" class="">Crear Estado Lead</a>
                </div>
                <div>
                  <a routerLink="LeadsState" class="">Ver Estados Leads</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="leadsOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#leads-collapse"
                aria-expanded="true" aria-controls="leads-collapse">
                <i class="fas fa-filter mr-2"></i>
                Leads
              </button>
            </div>
            <div class="collapse" id="leads-collapse" aria-labelledby="leadsOne" data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="Leads/create" class="">Crear Lead</a>
                </div>
                <div>
                  <a routerLink="Leads" class="">Ver Leads</a>
                </div>
              </ul>
            </div>
          </li>
          <li class="accordion-item mb-1">
            <div class="accordion-header" id="subscriptionsOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#subscriptions-collapse"
                aria-expanded="true" aria-controls="subscriptions-collapse">
                <i class="fas fa-user mr-2"></i>
                Subscripciones
              </button>
            </div>
            <div class="collapse" id="subscriptions-collapse" aria-labelledby="subscriptionsOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="subscriptions" class="">Ver Subscripciones</a>
                </div>
              </ul>
            </div>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between px-3 mt-3 mb-1 text-muted">
          <span>Streaming</span>
        </h6>
        <ul class="nav flex-column">

          <li class="accordion-item mb-1">
            <div class="accordion-header" id="streamingOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#streaming-collapse"
                aria-expanded="true" aria-controls="streaming-collapse">
                <i class="fas fa-cut mr-2"></i>
                Streamings
              </button>
            </div>
            <div class="collapse" id="streaming-collapse" aria-labelledby="streamingOne"
              data-bs-parent="#accordionExample">
              <ul class="btn-toggle-nav accordion-body pb-1">
                <div>
                  <a routerLink="streaming/create" class="">Crear Streaming</a>
                </div>
                <div>
                  <a routerLink="streaming" class="">Ver Streamings</a>
                </div>
              </ul>
            </div>
          </li>
        </ul>

      </div>
    </nav>


</body>
</html>