@extends('layouts.app')

@section('content')
<b-container fluid class="h-100">
  <b-row class="h-100" no-gutters>
    <b-col cols="4" md="4" sm="4">
      <contact-list-component></contact-list-component>
    </b-col>
    <b-col cols="8" md="8" sm="8">
      <active-conversation-component></active-conversation-component>
    </b-col>
  </b-row>
</b-container>
@endsection
@section('scripts')

@endsection
