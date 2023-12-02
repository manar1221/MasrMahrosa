<div>
    <form action="{{route('case.search')}}" class="csearch-form">
        <input
          type="text"
          name="q"
          required
          placeholder="search cases..."
          maxlength="100"
        />
        <button type="submit" class="fas fa-search"></button>
      </form>
</div>
