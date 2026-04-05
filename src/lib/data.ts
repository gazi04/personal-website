export const person = {
  name: "Alex Kovacs",
  title: "Backend & Systems Developer",
  tagline: "I build systems that scale, survive, and never sleep.",
  bio: "Mid-level backend developer with 2+ years building distributed systems, resilient APIs, and data pipelines that perform under pressure. I care deeply about fault tolerance, observable systems, and writing code that the next engineer won't curse at 3am.",
  location: "Tirana, Albania",
  email: "alex@example.com",
  github: "https://github.com/alexkovacs",
  linkedin: "https://linkedin.com/in/alexkovacs",
  available: true,
  availabilityNote: "Open to freelance & full-time",
};

export const skills = [
  {
    category: "Languages",
    items: ["Python", "PHP", "SQL", "Bash"],
  },
  {
    category: "APIs & Microservices",
    items: ["REST", "gRPC", "FastAPI", "Laravel", "RabbitMQ", "Kafka"],
  },
  {
    category: "Databases",
    items: ["PostgreSQL", "MySQL", "Redis", "MongoDB", "ClickHouse"],
  },
  {
    category: "Distributed Systems",
    items: ["Event-driven architecture", "Message queues", "Load balancing", "Caching strategies"],
  },
  {
    category: "Infrastructure",
    items: ["Docker", "Linux", "Nginx", "CI/CD", "Git"],
  },
];

export const experience = [
  {
    company: "TechCorp Solutions",
    role: "Backend Developer",
    period: "Jan 2023 – Present",
    description:
      "Building and maintaining microservices handling 500k+ daily requests. Redesigned the data ingestion pipeline reducing processing time by 60%. Implemented distributed caching strategy that cut database load by 40%.",
    tags: ["Python", "FastAPI", "PostgreSQL", "Redis", "Docker"],
  },
  {
    company: "Freelance",
    role: "Backend Developer",
    period: "Jun 2022 – Dec 2022",
    description:
      "Delivered backend systems for 3 clients including a real-estate platform and a logistics SaaS. Designed REST APIs from scratch, set up CI/CD pipelines, and ensured 99.9% uptime SLAs.",
    tags: ["PHP", "Laravel", "MySQL", "Linux"],
  },
];

export const projects = [
  {
    name: "StreamForge",
    summary: "Real-time event streaming pipeline",
    description:
      "A fault-tolerant event streaming pipeline built to process high-velocity data from IoT devices. Handles backpressure gracefully, persists to ClickHouse, and exposes a monitoring dashboard.",
    highlights: [
      "Processes 10k+ events/sec on commodity hardware",
      "Auto-recovers from node failures with zero data loss",
      "Built-in dead-letter queues and replay mechanism",
    ],
    stack: ["Python", "Kafka", "ClickHouse", "Redis", "Docker"],
    github: "https://github.com/alexkovacs/streamforge",
    live: null,
  },
  {
    name: "VaultAPI",
    summary: "Zero-downtime secrets management microservice",
    description:
      "A lightweight secrets management service with automatic rotation, audit logging, and role-based access. Designed for multi-tenant SaaS applications that need compliance-grade audit trails.",
    highlights: [
      "Automatic secret rotation with zero application restart",
      "Full audit trail with tamper-evident logs",
      "Role-based access with policy inheritance",
    ],
    stack: ["Python", "FastAPI", "PostgreSQL", "Redis"],
    github: "https://github.com/alexkovacs/vaultapi",
    live: null,
  },
  {
    name: "QueryMesh",
    summary: "Federated query router for multi-database setups",
    description:
      "Routes queries intelligently across read replicas and write primaries in a multi-database architecture. Reduces query latency by 35% by analyzing query patterns and caching hot paths.",
    highlights: [
      "Automatic read/write splitting",
      "Connection pooling across 10+ DB nodes",
      "Query plan caching with TTL invalidation",
    ],
    stack: ["PHP", "MySQL", "Redis", "Laravel"],
    github: "https://github.com/alexkovacs/querymesh",
    live: null,
  },
];

export const blogPosts = [
  {
    title: "Why Your Distributed System Will Fail (And How to Design For It)",
    date: "Mar 2025",
    slug: "distributed-system-failure-modes",
    summary:
      "A practical walkthrough of the most common distributed system failure modes and the architectural patterns that make them survivable.",
    readTime: "8 min",
  },
  {
    title: "PostgreSQL Connection Pooling: PgBouncer vs Native Pooling",
    date: "Jan 2025",
    slug: "postgres-connection-pooling",
    summary:
      "Deep dive into the tradeoffs between PgBouncer, Pgpool-II, and PostgreSQL's own pooling — with benchmarks from a production workload.",
    readTime: "6 min",
  },
  {
    title: "Dead Letter Queues Are Your Best Friend",
    date: "Nov 2024",
    slug: "dead-letter-queues",
    summary:
      "Most teams add dead letter queues as an afterthought. Here's why they should be one of the first things you design into a message-driven system.",
    readTime: "5 min",
  },
];
