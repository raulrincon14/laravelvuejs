@extends('principal')
@section('contenido')
  <template v-if="menu==0">
    <h1>Contenido del Menú 0</h1>
  </template>
  <template v-if="menu==1">
    <categoria></categoria>
    </template>
  <template v-if="menu==2">
     <h1>Contenido del Menú 2</h1>
  </template>
  <template v-if="menu==3">
     <h1>Contenido del Menú 3</h1>
  </template>
  <template v-if="menu==4">
     <h1>Contenido del Menú 4</h1>
  </template>
  <template v-if="menu==5">
     <h1>Contenido del Menú 5</h1>
  </template>
  <template v-if="menu==6">
     <h1>Contenido del Menú 6</h1>
  </template>
  <template v-if="menu==7">
     <h1>Contenido del Menú 7</h1>
  </template>
  <template v-if="menu==8">
     <h1>Contenido del Menú 8</h1>
  </template>
  <template v-if="menu==9">
     <h1>Contenido del Menú 9</h1>
  </template>
  <template v-if="menu==10">
     <h1>Contenido del Menú 10</h1>
  </template>
  <template v-if="menu==11">
     <h1>Contenido del Menú 11</h1>
  </template>
  <template v-if="menu==12">
     <h1>Contenido del Menú 12</h1>
  </template>

@endsection
